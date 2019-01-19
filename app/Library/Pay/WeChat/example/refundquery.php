<?php
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title>微信支付样例-查退款单</title>
</head>
<?php  ini_set('date.timezone', 'Asia/Shanghai'); error_reporting(E_ERROR); require_once '../lib/WxPay.Api.php'; require_once 'log.php'; $sp08ba31 = new CLogFileHandler('../logs/' . date('Y-m-d') . '.log'); $sp72b4d7 = Log::Init($sp08ba31, 15); function printf_info($sp631d11) { foreach ($sp631d11 as $spb5c5a0 => $spd77a65) { echo "<font color='#f00;'>{$spb5c5a0}</font> : {$spd77a65} <br/>"; } } if (isset($_REQUEST['transaction_id']) && $_REQUEST['transaction_id'] != '') { $sp8b5f2d = $_REQUEST['transaction_id']; $spf7fa80 = new WxPayRefundQuery(); $spf7fa80->SetTransaction_id($sp8b5f2d); printf_info(WxPayApi::refundQuery($spf7fa80)); } if (isset($_REQUEST['out_trade_no']) && $_REQUEST['out_trade_no'] != '') { $sp79d97c = $_REQUEST['out_trade_no']; $spf7fa80 = new WxPayRefundQuery(); $spf7fa80->SetOut_trade_no($sp79d97c); printf_info(WxPayApi::refundQuery($spf7fa80)); die; } if (isset($_REQUEST['out_refund_no']) && $_REQUEST['out_refund_no'] != '') { $sp0af304 = $_REQUEST['out_refund_no']; $spf7fa80 = new WxPayRefundQuery(); $spf7fa80->SetOut_refund_no($sp0af304); printf_info(WxPayApi::refundQuery($spf7fa80)); die; } if (isset($_REQUEST['refund_id']) && $_REQUEST['refund_id'] != '') { $spd028b3 = $_REQUEST['refund_id']; $spf7fa80 = new WxPayRefundQuery(); $spf7fa80->SetRefund_id($spd028b3); printf_info(WxPayApi::refundQuery($spf7fa80)); die; } ?>
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