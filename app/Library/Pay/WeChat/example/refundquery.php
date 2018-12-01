<?php
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title>微信支付样例-查退款单</title>
</head>
<?php  ini_set('date.timezone', 'Asia/Shanghai'); error_reporting(E_ERROR); require_once '../lib/WxPay.Api.php'; require_once 'log.php'; $sp96c2fa = new CLogFileHandler('../logs/' . date('Y-m-d') . '.log'); $spa973ce = Log::Init($sp96c2fa, 15); function printf_info($sp38c5ae) { foreach ($sp38c5ae as $spa8a71b => $spffe9f9) { echo "<font color='#f00;'>{$spa8a71b}</font> : {$spffe9f9} <br/>"; } } if (isset($_REQUEST['transaction_id']) && $_REQUEST['transaction_id'] != '') { $spafff8a = $_REQUEST['transaction_id']; $sp11f4cb = new WxPayRefundQuery(); $sp11f4cb->SetTransaction_id($spafff8a); printf_info(WxPayApi::refundQuery($sp11f4cb)); } if (isset($_REQUEST['out_trade_no']) && $_REQUEST['out_trade_no'] != '') { $spd184e1 = $_REQUEST['out_trade_no']; $sp11f4cb = new WxPayRefundQuery(); $sp11f4cb->SetOut_trade_no($spd184e1); printf_info(WxPayApi::refundQuery($sp11f4cb)); die; } if (isset($_REQUEST['out_refund_no']) && $_REQUEST['out_refund_no'] != '') { $sp77ff41 = $_REQUEST['out_refund_no']; $sp11f4cb = new WxPayRefundQuery(); $sp11f4cb->SetOut_refund_no($sp77ff41); printf_info(WxPayApi::refundQuery($sp11f4cb)); die; } if (isset($_REQUEST['refund_id']) && $_REQUEST['refund_id'] != '') { $spaa3feb = $_REQUEST['refund_id']; $sp11f4cb = new WxPayRefundQuery(); $sp11f4cb->SetRefund_id($spaa3feb); printf_info(WxPayApi::refundQuery($sp11f4cb)); die; } ?>
<body>  
	<form action="#" method="post">
        <div style="margin-left:2%;color:#f00">微信订单号、商户订单号、微信订单号、微信退款单号选填至少一个，微信退款单号优先：</div><br/>
        <div style="margin-left:2%;">微信订单号：</div><br/>
        <input type="text" style="width:96%;height:35px;margin-left:2%;" name="transaction_id" /><br /><br />
        <div style="margin-left:2%;">商户订单号：</div><br/>
        <input type="text" style="width:96%;height:35px;margin-left:2%;" name="out_trade_no" /><br /><br />
        <div style="margin-left:2%;">商户退款单号：</div><br/>
        <input type="text" style="width:96%;height:35px;margin-left:2%;" name="out_refund_no" /><br /><br />
        <div style="margin-left:2%;">微信退款单号：</div><br/>
        <input type="text" style="width:96%;height:35px;margin-left:2%;" name="refund_id" /><br /><br />
		<div align="center">
			<input type="submit" value="查询" style="width:210px; height:50px; border-radius: 15px;background-color:#FE6714; border:0px #FE6714 solid; cursor: pointer;  color:white;  font-size:16px;" type="button" onclick="callpay()" />
		</div>
	</form>
</body>
</html><?php 