<?php
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title>微信支付样例-查退款单</title>
</head>
<?php  require_once '../lib/WxPay.Api.php'; require_once 'WxPay.MicroPay.php'; require_once 'log.php'; $spf26d26 = new CLogFileHandler('../logs/' . date('Y-m-d') . '.log'); $sp10de36 = Log::Init($spf26d26, 15); function printf_info($sp2bb3bd) { foreach ($sp2bb3bd as $spc95936 => $sp4d089d) { echo "<font color='#00ff55;'>{$spc95936}</font> : {$sp4d089d} <br/>"; } } if (isset($_REQUEST['auth_code']) && $_REQUEST['auth_code'] != '') { $sp6c9e08 = $_REQUEST['auth_code']; $sp63ca0e = new WxPayMicroPay(); $sp63ca0e->SetAuth_code($sp6c9e08); $sp63ca0e->SetBody('刷卡测试样例-支付'); $sp63ca0e->SetTotal_fee('1'); $sp63ca0e->SetOut_trade_no(WxPayConfig::MCHID . date('YmdHis')); $sp8a394f = new MicroPay(); printf_info($sp8a394f->pay($sp63ca0e)); } ?>
<body>  
	<form action="#" method="post">
        <div style="margin-left:2%;">商品描述：</div><br/>
        <input type="text" style="width:96%;height:35px;margin-left:2%;" readonly value="刷卡测试样例-支付" name="auth_code" /><br /><br />
        <div style="margin-left:2%;">支付金额：</div><br/>
        <input type="text" style="width:96%;height:35px;margin-left:2%;" readonly value="1分" name="auth_code" /><br /><br />
        <div style="margin-left:2%;">授权码：</div><br/>
        <input type="text" style="width:96%;height:35px;margin-left:2%;" name="auth_code" /><br /><br />
       	<div align="center">
			<input type="submit" value="提交刷卡" style="width:210px; height:50px; border-radius: 15px;background-color:#FE6714; border:0px #FE6714 solid; cursor: pointer;  color:white;  font-size:16px;" type="button" onclick="callpay()" />
		</div>
	</form>
</body>
</html><?php 