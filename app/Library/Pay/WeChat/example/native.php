<?php
ini_set('date.timezone', 'Asia/Shanghai'); require_once '../lib/WxPay.Api.php'; require_once 'WxPay.NativePay.php'; require_once 'log.php'; $spf1ec9c = new NativePay(); $sp4033c0 = $spf1ec9c->GetPrePayUrl('123456789'); $sp106469 = new WxPayUnifiedOrder(); $sp106469->SetBody('test'); $sp106469->SetAttach('test'); $sp106469->SetOut_trade_no(WxPayConfig::MCHID . date('YmdHis')); $sp106469->SetTotal_fee('1'); $sp106469->SetTime_start(date('YmdHis')); $sp106469->SetTime_expire(date('YmdHis', time() + 600)); $sp106469->SetGoods_tag('test'); $sp106469->SetNotify_url('http://paysdk.weixin.qq.com/example/notify.php'); $sp106469->SetTrade_type('NATIVE'); $sp106469->SetProduct_id('123456789'); $sp836ce6 = $spf1ec9c->GetPayUrl($sp106469); $sp38d7ed = $sp836ce6['code_url']; ?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title>微信支付样例-退款</title>
</head>
<body>
	<div style="margin-left: 10px;color:#556B2F;font-size:30px;font-weight: bolder;">扫描支付模式一</div><br/>
	<img alt="模式一扫码支付" src="http://paysdk.weixin.qq.com/example/qrcode.php?data=<?php  echo urlencode($sp4033c0); ?>
" style="width:150px;height:150px;"/>
	<br/><br/><br/>
	<div style="margin-left: 10px;color:#556B2F;font-size:30px;font-weight: bolder;">扫描支付模式二</div><br/>
	<img alt="模式二扫码支付" src="http://paysdk.weixin.qq.com/example/qrcode.php?data=<?php  echo urlencode($sp38d7ed); ?>
" style="width:150px;height:150px;"/>
	
</body>
</html><?php 