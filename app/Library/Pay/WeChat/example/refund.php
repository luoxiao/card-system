<?php
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title>微信支付样例-退款</title>
</head>
<?php  ini_set('date.timezone', 'Asia/Shanghai'); error_reporting(E_ERROR); require_once '../lib/WxPay.Api.php'; require_once 'log.php'; $spf26d26 = new CLogFileHandler('../logs/' . date('Y-m-d') . '.log'); $sp10de36 = Log::Init($spf26d26, 15); function printf_info($sp2bb3bd) { foreach ($sp2bb3bd as $spc95936 => $sp4d089d) { echo "<font color='#f00;'>{$spc95936}</font> : {$sp4d089d} <br/>"; } } if (isset($_REQUEST['transaction_id']) && $_REQUEST['transaction_id'] != '') { $spc91986 = $_REQUEST['transaction_id']; $sp151a84 = $_REQUEST['total_fee']; $sp087cd8 = $_REQUEST['refund_fee']; $sp63ca0e = new WxPayRefund(); $sp63ca0e->SetTransaction_id($spc91986); $sp63ca0e->SetTotal_fee($sp151a84); $sp63ca0e->SetRefund_fee($sp087cd8); $sp63ca0e->SetOut_refund_no(WxPayConfig::MCHID . date('YmdHis')); $sp63ca0e->SetOp_user_id(WxPayConfig::MCHID); printf_info(WxPayApi::refund($sp63ca0e)); die; } if (isset($_REQUEST['out_trade_no']) && $_REQUEST['out_trade_no'] != '') { $spd2bbfa = $_REQUEST['out_trade_no']; $sp151a84 = $_REQUEST['total_fee']; $sp087cd8 = $_REQUEST['refund_fee']; $sp63ca0e = new WxPayRefund(); $sp63ca0e->SetOut_trade_no($spd2bbfa); $sp63ca0e->SetTotal_fee($sp151a84); $sp63ca0e->SetRefund_fee($sp087cd8); $sp63ca0e->SetOut_refund_no(WxPayConfig::MCHID . date('YmdHis')); $sp63ca0e->SetOp_user_id(WxPayConfig::MCHID); printf_info(WxPayApi::refund($sp63ca0e)); die; } ?>
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