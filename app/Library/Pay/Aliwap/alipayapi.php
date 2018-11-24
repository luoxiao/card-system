<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>支付宝手机网站支付接口接口</title>
</head>
<?php  require_once 'alipay.config.php'; require_once 'lib/alipay_submit.class.php'; $sp6281ad = $_POST['WIDout_trade_no']; $spe4243d = $_POST['WIDsubject']; $spf4aff4 = $_POST['WIDtotal_fee']; $spb3232a = $_POST['WIDshow_url']; $sp1d246b = $_POST['WIDbody']; $sp5f52cd = array('service' => $sp394da4['service'], 'partner' => $sp394da4['partner'], 'seller_id' => $sp394da4['seller_id'], 'payment_type' => $sp394da4['payment_type'], 'notify_url' => $sp394da4['notify_url'], 'return_url' => $sp394da4['return_url'], '_input_charset' => trim(strtolower($sp394da4['input_charset'])), 'out_trade_no' => $sp6281ad, 'subject' => $spe4243d, 'total_fee' => $spf4aff4, 'show_url' => $spb3232a, 'body' => $sp1d246b); $sp160ee6 = new AlipaySubmit($sp394da4); $sp52c012 = $sp160ee6->buildRequestForm($sp5f52cd, 'get', '确认'); echo $sp52c012; ?>
</body>
</html><?php 