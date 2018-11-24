<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>支付宝即时到账交易接口接口</title>
</head>
<?php  require_once 'alipay.config.php'; require_once 'lib/alipay_submit.class.php'; $sp2714cc = $_POST['WIDout_trade_no']; $spc644e5 = $_POST['WIDsubject']; $spe1a1d8 = $_POST['WIDtotal_fee']; $sp5b5e88 = $_POST['WIDbody']; $spc2d1ca = array('service' => $sp233f0d['service'], 'partner' => $sp233f0d['partner'], 'seller_id' => $sp233f0d['seller_id'], 'payment_type' => $sp233f0d['payment_type'], 'notify_url' => $sp233f0d['notify_url'], 'return_url' => $sp233f0d['return_url'], 'anti_phishing_key' => $sp233f0d['anti_phishing_key'], 'exter_invoke_ip' => $sp233f0d['exter_invoke_ip'], 'out_trade_no' => $sp2714cc, 'subject' => $spc644e5, 'total_fee' => $spe1a1d8, 'body' => $sp5b5e88, '_input_charset' => trim(strtolower($sp233f0d['input_charset']))); $spefe525 = new AlipaySubmit($sp233f0d); $spca2c87 = $spefe525->buildRequestForm($spc2d1ca, 'get', '确认'); echo $spca2c87; ?>
</body>
</html><?php 