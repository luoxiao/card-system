<?php
ini_set('date.timezone', 'Asia/Shanghai'); require_once '../lib/WxPay.Api.php'; require_once 'WxPay.NativePay.php'; require_once 'log.php'; $sp8ada1b = new NativePay(); $sp9745fa = $sp8ada1b->GetPrePayUrl('123456789'); $sp51043b = new WxPayUnifiedOrder(); $sp51043b->SetBody('test'); $sp51043b->SetAttach('test'); $sp51043b->SetOut_trade_no(WxPayConfig::MCHID . date('YmdHis')); $sp51043b->SetTotal_fee('1'); $sp51043b->SetTime_start(date('YmdHis')); $sp51043b->SetTime_expire(date('YmdHis', time() + 600)); $sp51043b->SetGoods_tag('test'); $sp51043b->SetNotify_url('http://paysdk.weixin.qq.com/example/notify.php'); $sp51043b->SetTrade_type('NATIVE'); $sp51043b->SetProduct_id('123456789'); $spbcb528 = $sp8ada1b->GetPayUrl($sp51043b); $sp3d6562 = $spbcb528['code_url']; ?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title>微信支付样例-退款</title>
</head>
<body>
	<div style="margin-left: 10px;color:#556B2F;font-size:30px;font-weight: bolder;">扫描支付模式一</div><br/>
	<img alt="模式一扫码支付" src="http://paysdk.weixin.qq.com/example/qrcode.php?data=<?php  echo urlencode($sp9745fa); ?>
" style="width:150px;height:150px;"/>
	<br/><br/><br/>
	<div style="margin-left: 10px;color:#556B2F;font-size:30px;font-weight: bolder;">扫描支付模式二</div><br/>
	<img alt="模式二扫码支付" src="http://paysdk.weixin.qq.com/example/qrcode.php?data=<?php  echo urlencode($sp3d6562); ?>
" style="width:150px;height:150px;"/>
	
</body>
</html><?php 