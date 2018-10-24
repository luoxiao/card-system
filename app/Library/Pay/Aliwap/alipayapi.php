<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>支付宝手机网站支付接口接口</title>
</head>
<?php  require_once 'alipay.config.php'; require_once 'lib/alipay_submit.class.php'; $spbd054b = $_POST['WIDout_trade_no']; $sp547016 = $_POST['WIDsubject']; $sp0c4618 = $_POST['WIDtotal_fee']; $sp5a7d55 = $_POST['WIDshow_url']; $speb838e = $_POST['WIDbody']; $spd257c9 = array('service' => $spe325b5['service'], 'partner' => $spe325b5['partner'], 'seller_id' => $spe325b5['seller_id'], 'payment_type' => $spe325b5['payment_type'], 'notify_url' => $spe325b5['notify_url'], 'return_url' => $spe325b5['return_url'], '_input_charset' => trim(strtolower($spe325b5['input_charset'])), 'out_trade_no' => $spbd054b, 'subject' => $sp547016, 'total_fee' => $sp0c4618, 'show_url' => $sp5a7d55, 'body' => $speb838e); $spa00088 = new AlipaySubmit($spe325b5); $sp3dff58 = $spa00088->buildRequestForm($spd257c9, 'get', '确认'); echo $sp3dff58; ?>
</body>
</html><?php 