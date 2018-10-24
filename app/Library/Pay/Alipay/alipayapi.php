<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>支付宝即时到账交易接口接口</title>
</head>
<?php  require_once 'alipay.config.php'; require_once 'lib/alipay_submit.class.php'; $spbd054b = $_POST['WIDout_trade_no']; $sp547016 = $_POST['WIDsubject']; $sp0c4618 = $_POST['WIDtotal_fee']; $speb838e = $_POST['WIDbody']; $spd257c9 = array('service' => $spe325b5['service'], 'partner' => $spe325b5['partner'], 'seller_id' => $spe325b5['seller_id'], 'payment_type' => $spe325b5['payment_type'], 'notify_url' => $spe325b5['notify_url'], 'return_url' => $spe325b5['return_url'], 'anti_phishing_key' => $spe325b5['anti_phishing_key'], 'exter_invoke_ip' => $spe325b5['exter_invoke_ip'], 'out_trade_no' => $spbd054b, 'subject' => $sp547016, 'total_fee' => $sp0c4618, 'body' => $speb838e, '_input_charset' => trim(strtolower($spe325b5['input_charset']))); $spa00088 = new AlipaySubmit($spe325b5); $sp3dff58 = $spa00088->buildRequestForm($spd257c9, 'get', '确认'); echo $sp3dff58; ?>
</body>
</html><?php 