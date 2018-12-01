<?php
ini_set('date.timezone', 'Asia/Shanghai'); require_once '../lib/WxPay.Api.php'; require_once 'WxPay.NativePay.php'; require_once 'log.php'; $spe754f9 = new NativePay(); $sp328d3d = $spe754f9->GetPrePayUrl('123456789'); $sp11f4cb = new WxPayUnifiedOrder(); $sp11f4cb->SetBody('test'); $sp11f4cb->SetAttach('test'); $sp11f4cb->SetOut_trade_no(WxPayConfig::MCHID . date('YmdHis')); $sp11f4cb->SetTotal_fee('1'); $sp11f4cb->SetTime_start(date('YmdHis')); $sp11f4cb->SetTime_expire(date('YmdHis', time() + 600)); $sp11f4cb->SetGoods_tag('test'); $sp11f4cb->SetNotify_url('http://paysdk.weixin.qq.com/example/notify.php'); $sp11f4cb->SetTrade_type('NATIVE'); $sp11f4cb->SetProduct_id('123456789'); $spcc4042 = $spe754f9->GetPayUrl($sp11f4cb); $spc3ba8d = $spcc4042['code_url']; ?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title>微信支付样例-退款</title>
</head>
<body>
	<div style="margin-left: 10px;color:#556B2F;font-size:30px;font-weight: bolder;">扫描支付模式一</div><br/>
	<img alt="模式一扫码支付" src="http://paysdk.weixin.qq.com/example/qrcode.php?data=<?php  echo urlencode($sp328d3d); ?>
" style="width:150px;height:150px;"/>
	<br/><br/><br/>
	<div style="margin-left: 10px;color:#556B2F;font-size:30px;font-weight: bolder;">扫描支付模式二</div><br/>
	<img alt="模式二扫码支付" src="http://paysdk.weixin.qq.com/example/qrcode.php?data=<?php  echo urlencode($spc3ba8d); ?>
" style="width:150px;height:150px;"/>
	
</body>
</html><?php 