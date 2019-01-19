<?php
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title>微信支付样例-查退款单</title>
</head>
<?php  require_once '../lib/WxPay.Api.php'; require_once 'WxPay.MicroPay.php'; require_once 'log.php'; $sp08ba31 = new CLogFileHandler('../logs/' . date('Y-m-d') . '.log'); $sp72b4d7 = Log::Init($sp08ba31, 15); function printf_info($sp631d11) { foreach ($sp631d11 as $spb5c5a0 => $spd77a65) { echo "<font color='#00ff55;'>{$spb5c5a0}</font> : {$spd77a65} <br/>"; } } if (isset($_REQUEST['auth_code']) && $_REQUEST['auth_code'] != '') { $sp7316d4 = $_REQUEST['auth_code']; $spf7fa80 = new WxPayMicroPay(); $spf7fa80->SetAuth_code($sp7316d4); $spf7fa80->SetBody('刷卡测试样例-支付'); $spf7fa80->SetTotal_fee('1'); $spf7fa80->SetOut_trade_no(WxPayConfig::MCHID . date('YmdHis')); $sp859a28 = new MicroPay(); printf_info($sp859a28->pay($spf7fa80)); } ?>
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