<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>支付宝手机网站支付接口接口</title>
</head>
<?php  require_once 'alipay.config.php'; require_once 'lib/alipay_submit.class.php'; $spd184e1 = $_POST['WIDout_trade_no']; $sp873da9 = $_POST['WIDsubject']; $sp07a665 = $_POST['WIDtotal_fee']; $sp36d705 = $_POST['WIDshow_url']; $sp33eb4d = $_POST['WIDbody']; $sp64a5c9 = array('service' => $sp751298['service'], 'partner' => $sp751298['partner'], 'seller_id' => $sp751298['seller_id'], 'payment_type' => $sp751298['payment_type'], 'notify_url' => $sp751298['notify_url'], 'return_url' => $sp751298['return_url'], '_input_charset' => trim(strtolower($sp751298['input_charset'])), 'out_trade_no' => $spd184e1, 'subject' => $sp873da9, 'total_fee' => $sp07a665, 'show_url' => $sp36d705, 'body' => $sp33eb4d); $spe0102e = new AlipaySubmit($sp751298); $sp238394 = $spe0102e->buildRequestForm($sp64a5c9, 'get', '确认'); echo $sp238394; ?>
</body>
</html><?php 