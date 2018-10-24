<?php
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title>微信支付样例-查退款单</title>
</head>
<?php  require_once '../lib/WxPay.Api.php'; require_once 'WxPay.MicroPay.php'; require_once 'log.php'; $sp0d13f3 = new CLogFileHandler('../logs/' . date('Y-m-d') . '.log'); $sp1ac1a0 = Log::Init($sp0d13f3, 15); function printf_info($sp1835de) { foreach ($sp1835de as $sp9684a3 => $spb66e06) { echo "<font color='#00ff55;'>{$sp9684a3}</font> : {$spb66e06} <br/>"; } } if (isset($_REQUEST['auth_code']) && $_REQUEST['auth_code'] != '') { $sp035578 = $_REQUEST['auth_code']; $sp51043b = new WxPayMicroPay(); $sp51043b->SetAuth_code($sp035578); $sp51043b->SetBody('刷卡测试样例-支付'); $sp51043b->SetTotal_fee('1'); $sp51043b->SetOut_trade_no(WxPayConfig::MCHID . date('YmdHis')); $sp71746e = new MicroPay(); printf_info($sp71746e->pay($sp51043b)); } ?>
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