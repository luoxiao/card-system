<?php
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title>微信支付样例-订单查询</title>
</head>
<?php  ini_set('date.timezone', 'Asia/Shanghai'); error_reporting(E_ERROR); require_once '../lib/WxPay.Api.php'; require_once 'log.php'; $spa904b1 = new CLogFileHandler('./logs/' . date('Y-m-d') . '.log'); $sp01b52a = Log::Init($spa904b1, 15); function printf_info($sp94131d) { foreach ($sp94131d as $sp63ae76 => $sp308e09) { echo "<font color='#f00;'>{$sp63ae76}</font> : {$sp308e09} <br/>"; } } if (isset($_REQUEST['transaction_id']) && $_REQUEST['transaction_id'] != '') { $sp6d9277 = $_REQUEST['transaction_id']; $sp106469 = new WxPayOrderQuery(); $sp106469->SetTransaction_id($sp6d9277); printf_info(WxPayApi::orderQuery($sp106469)); die; } if (isset($_REQUEST['out_trade_no']) && $_REQUEST['out_trade_no'] != '') { $sp6281ad = $_REQUEST['out_trade_no']; $sp106469 = new WxPayOrderQuery(); $sp106469->SetOut_trade_no($sp6281ad); printf_info(WxPayApi::orderQuery($sp106469)); die; } ?>
<body>  
	<form action="#" method="post">
        <div style="margin-left:2%;color:#f00">微信订单号和商户订单号选少填一个，微信订单号优先：</div><br/>
        <div style="margin-left:2%;">微信订单号：</div><br/>
        <input type="text" style="width:96%;height:35px;margin-left:2%;" name="transaction_id" /><br /><br />
        <div style="margin-left:2%;">商户订单号：</div><br/>
        <input type="text" style="width:96%;height:35px;margin-left:2%;" name="out_trade_no" /><br /><br />
		<div align="center">
			<input type="submit" value="查询" style="width:210px; height:50px; border-radius: 15px;background-color:#FE6714; border:0px #FE6714 solid; cursor: pointer;  color:white;  font-size:16px;" type="button" onclick="callpay()" />
		</div>
	</form>
</body>
</html><?php 