<?php
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title>微信支付样例-退款</title>
</head>
<?php  ini_set('date.timezone', 'Asia/Shanghai'); error_reporting(E_ERROR); require_once '../lib/WxPay.Api.php'; require_once 'log.php'; $sp96c2fa = new CLogFileHandler('../logs/' . date('Y-m-d') . '.log'); $spa973ce = Log::Init($sp96c2fa, 15); function printf_info($sp38c5ae) { foreach ($sp38c5ae as $spa8a71b => $spffe9f9) { echo "<font color='#f00;'>{$spa8a71b}</font> : {$spffe9f9} <br/>"; } } if (isset($_REQUEST['transaction_id']) && $_REQUEST['transaction_id'] != '') { $spafff8a = $_REQUEST['transaction_id']; $sp07a665 = $_REQUEST['total_fee']; $spba3ba4 = $_REQUEST['refund_fee']; $sp11f4cb = new WxPayRefund(); $sp11f4cb->SetTransaction_id($spafff8a); $sp11f4cb->SetTotal_fee($sp07a665); $sp11f4cb->SetRefund_fee($spba3ba4); $sp11f4cb->SetOut_refund_no(WxPayConfig::MCHID . date('YmdHis')); $sp11f4cb->SetOp_user_id(WxPayConfig::MCHID); printf_info(WxPayApi::refund($sp11f4cb)); die; } if (isset($_REQUEST['out_trade_no']) && $_REQUEST['out_trade_no'] != '') { $spd184e1 = $_REQUEST['out_trade_no']; $sp07a665 = $_REQUEST['total_fee']; $spba3ba4 = $_REQUEST['refund_fee']; $sp11f4cb = new WxPayRefund(); $sp11f4cb->SetOut_trade_no($spd184e1); $sp11f4cb->SetTotal_fee($sp07a665); $sp11f4cb->SetRefund_fee($spba3ba4); $sp11f4cb->SetOut_refund_no(WxPayConfig::MCHID . date('YmdHis')); $sp11f4cb->SetOp_user_id(WxPayConfig::MCHID); printf_info(WxPayApi::refund($sp11f4cb)); die; } ?>
<body>  
	<form action="#" method="post">
        <div style="margin-left:2%;color:#f00">微信订单号和商户订单号选少填一个，微信订单号优先：</div><br/>
        <div style="margin-left:2%;">微信订单号：</div><br/>
        <input type="text" style="width:96%;height:35px;margin-left:2%;" name="transaction_id" /><br /><br />
        <div style="margin-left:2%;">商户订单号：</div><br/>
        <input type="text" style="width:96%;height:35px;margin-left:2%;" name="out_trade_no" /><br /><br />
        <div style="margin-left:2%;">订单总金额(分)：</div><br/>
        <input type="text" style="width:96%;height:35px;margin-left:2%;" name="total_fee" /><br /><br />
        <div style="margin-left:2%;">退款金额(分)：</div><br/>
        <input type="text" style="width:96%;height:35px;margin-left:2%;" name="refund_fee" /><br /><br />
		<div align="center">
			<input type="submit" value="提交退款" style="width:210px; height:50px; border-radius: 15px;background-color:#FE6714; border:0px #FE6714 solid; cursor: pointer;  color:white;  font-size:16px;" type="button" onclick="callpay()" />
		</div>
	</form>
</body>
</html><?php 