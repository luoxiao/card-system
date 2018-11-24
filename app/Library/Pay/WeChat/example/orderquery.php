<?php
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title>微信支付样例-订单查询</title>
</head>
<?php  ini_set('date.timezone', 'Asia/Shanghai'); error_reporting(E_ERROR); require_once '../lib/WxPay.Api.php'; require_once 'log.php'; $sp980d2a = new CLogFileHandler('./logs/' . date('Y-m-d') . '.log'); $spa1e99a = Log::Init($sp980d2a, 15); function printf_info($sp151100) { foreach ($sp151100 as $spfcd1b0 => $spd0bf21) { echo "<font color='#f00;'>{$spfcd1b0}</font> : {$spd0bf21} <br/>"; } } if (isset($_REQUEST['transaction_id']) && $_REQUEST['transaction_id'] != '') { $sp41da3e = $_REQUEST['transaction_id']; $sp02dbf9 = new WxPayOrderQuery(); $sp02dbf9->SetTransaction_id($sp41da3e); printf_info(WxPayApi::orderQuery($sp02dbf9)); die; } if (isset($_REQUEST['out_trade_no']) && $_REQUEST['out_trade_no'] != '') { $sp2714cc = $_REQUEST['out_trade_no']; $sp02dbf9 = new WxPayOrderQuery(); $sp02dbf9->SetOut_trade_no($sp2714cc); printf_info(WxPayApi::orderQuery($sp02dbf9)); die; } ?>
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