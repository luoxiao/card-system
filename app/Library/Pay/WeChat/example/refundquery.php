<?php
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title>微信支付样例-查退款单</title>
</head>
<?php  ini_set('date.timezone', 'Asia/Shanghai'); error_reporting(E_ERROR); require_once '../lib/WxPay.Api.php'; require_once 'log.php'; $spf26d26 = new CLogFileHandler('../logs/' . date('Y-m-d') . '.log'); $sp10de36 = Log::Init($spf26d26, 15); function printf_info($sp2bb3bd) { foreach ($sp2bb3bd as $spc95936 => $sp4d089d) { echo "<font color='#f00;'>{$spc95936}</font> : {$sp4d089d} <br/>"; } } if (isset($_REQUEST['transaction_id']) && $_REQUEST['transaction_id'] != '') { $spc91986 = $_REQUEST['transaction_id']; $sp63ca0e = new WxPayRefundQuery(); $sp63ca0e->SetTransaction_id($spc91986); printf_info(WxPayApi::refundQuery($sp63ca0e)); } if (isset($_REQUEST['out_trade_no']) && $_REQUEST['out_trade_no'] != '') { $spd2bbfa = $_REQUEST['out_trade_no']; $sp63ca0e = new WxPayRefundQuery(); $sp63ca0e->SetOut_trade_no($spd2bbfa); printf_info(WxPayApi::refundQuery($sp63ca0e)); die; } if (isset($_REQUEST['out_refund_no']) && $_REQUEST['out_refund_no'] != '') { $sp17210e = $_REQUEST['out_refund_no']; $sp63ca0e = new WxPayRefundQuery(); $sp63ca0e->SetOut_refund_no($sp17210e); printf_info(WxPayApi::refundQuery($sp63ca0e)); die; } if (isset($_REQUEST['refund_id']) && $_REQUEST['refund_id'] != '') { $sp542de3 = $_REQUEST['refund_id']; $sp63ca0e = new WxPayRefundQuery(); $sp63ca0e->SetRefund_id($sp542de3); printf_info(WxPayApi::refundQuery($sp63ca0e)); die; } ?>
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