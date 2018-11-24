<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>支付宝手机网站支付接口接口</title>
</head>
<?php  require_once 'alipay.config.php'; require_once 'lib/alipay_submit.class.php'; $sp2714cc = $_POST['WIDout_trade_no']; $spc644e5 = $_POST['WIDsubject']; $spe1a1d8 = $_POST['WIDtotal_fee']; $spdfc646 = $_POST['WIDshow_url']; $sp5b5e88 = $_POST['WIDbody']; $spc2d1ca = array('service' => $sp233f0d['service'], 'partner' => $sp233f0d['partner'], 'seller_id' => $sp233f0d['seller_id'], 'payment_type' => $sp233f0d['payment_type'], 'notify_url' => $sp233f0d['notify_url'], 'return_url' => $sp233f0d['return_url'], '_input_charset' => trim(strtolower($sp233f0d['input_charset'])), 'out_trade_no' => $sp2714cc, 'subject' => $spc644e5, 'total_fee' => $spe1a1d8, 'show_url' => $spdfc646, 'body' => $sp5b5e88); $spefe525 = new AlipaySubmit($sp233f0d); $spca2c87 = $spefe525->buildRequestForm($spc2d1ca, 'get', '确认'); echo $spca2c87; ?>
</body>
</html><?php 