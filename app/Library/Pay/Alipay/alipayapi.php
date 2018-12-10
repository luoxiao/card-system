<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>支付宝即时到账交易接口接口</title>
</head>
<?php  require_once 'alipay.config.php'; require_once 'lib/alipay_submit.class.php'; $spd2bbfa = $_POST['WIDout_trade_no']; $sp942f8c = $_POST['WIDsubject']; $sp151a84 = $_POST['WIDtotal_fee']; $spd86457 = $_POST['WIDbody']; $spd1ec13 = array('service' => $spa44e81['service'], 'partner' => $spa44e81['partner'], 'seller_id' => $spa44e81['seller_id'], 'payment_type' => $spa44e81['payment_type'], 'notify_url' => $spa44e81['notify_url'], 'return_url' => $spa44e81['return_url'], 'anti_phishing_key' => $spa44e81['anti_phishing_key'], 'exter_invoke_ip' => $spa44e81['exter_invoke_ip'], 'out_trade_no' => $spd2bbfa, 'subject' => $sp942f8c, 'total_fee' => $sp151a84, 'body' => $spd86457, '_input_charset' => trim(strtolower($spa44e81['input_charset']))); $sp68d4b7 = new AlipaySubmit($spa44e81); $sp559fc8 = $sp68d4b7->buildRequestForm($spd1ec13, 'get', '确认'); echo $sp559fc8; ?>
</body>
</html><?php 