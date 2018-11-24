<?php
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title>微信支付样例-查退款单</title>
</head>
<?php  require_once '../lib/WxPay.Api.php'; require_once 'WxPay.MicroPay.php'; require_once 'log.php'; $sp980d2a = new CLogFileHandler('../logs/' . date('Y-m-d') . '.log'); $spa1e99a = Log::Init($sp980d2a, 15); function printf_info($sp151100) { foreach ($sp151100 as $spfcd1b0 => $spd0bf21) { echo "<font color='#00ff55;'>{$spfcd1b0}</font> : {$spd0bf21} <br/>"; } } if (isset($_REQUEST['auth_code']) && $_REQUEST['auth_code'] != '') { $sp9411d9 = $_REQUEST['auth_code']; $sp02dbf9 = new WxPayMicroPay(); $sp02dbf9->SetAuth_code($sp9411d9); $sp02dbf9->SetBody('刷卡测试样例-支付'); $sp02dbf9->SetTotal_fee('1'); $sp02dbf9->SetOut_trade_no(WxPayConfig::MCHID . date('YmdHis')); $sp4ad9a5 = new MicroPay(); printf_info($sp4ad9a5->pay($sp02dbf9)); } ?>
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