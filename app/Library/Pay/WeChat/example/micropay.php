<?php
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title>微信支付样例-查退款单</title>
</head>
<?php  require_once '../lib/WxPay.Api.php'; require_once 'WxPay.MicroPay.php'; require_once 'log.php'; $sp96c2fa = new CLogFileHandler('../logs/' . date('Y-m-d') . '.log'); $spa973ce = Log::Init($sp96c2fa, 15); function printf_info($sp38c5ae) { foreach ($sp38c5ae as $spa8a71b => $spffe9f9) { echo "<font color='#00ff55;'>{$spa8a71b}</font> : {$spffe9f9} <br/>"; } } if (isset($_REQUEST['auth_code']) && $_REQUEST['auth_code'] != '') { $spfe51e6 = $_REQUEST['auth_code']; $sp11f4cb = new WxPayMicroPay(); $sp11f4cb->SetAuth_code($spfe51e6); $sp11f4cb->SetBody('刷卡测试样例-支付'); $sp11f4cb->SetTotal_fee('1'); $sp11f4cb->SetOut_trade_no(WxPayConfig::MCHID . date('YmdHis')); $spda81a1 = new MicroPay(); printf_info($spda81a1->pay($sp11f4cb)); } ?>
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