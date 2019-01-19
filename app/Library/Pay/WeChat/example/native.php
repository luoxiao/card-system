<?php
ini_set('date.timezone', 'Asia/Shanghai'); require_once '../lib/WxPay.Api.php'; require_once 'WxPay.NativePay.php'; require_once 'log.php'; $spb965e6 = new NativePay(); $spe7131c = $spb965e6->GetPrePayUrl('123456789'); $spf7fa80 = new WxPayUnifiedOrder(); $spf7fa80->SetBody('test'); $spf7fa80->SetAttach('test'); $spf7fa80->SetOut_trade_no(WxPayConfig::MCHID . date('YmdHis')); $spf7fa80->SetTotal_fee('1'); $spf7fa80->SetTime_start(date('YmdHis')); $spf7fa80->SetTime_expire(date('YmdHis', time() + 600)); $spf7fa80->SetGoods_tag('test'); $spf7fa80->SetNotify_url('http://paysdk.weixin.qq.com/example/notify.php'); $spf7fa80->SetTrade_type('NATIVE'); $spf7fa80->SetProduct_id('123456789'); $sp594fbb = $spb965e6->GetPayUrl($spf7fa80); $sp137ee2 = $sp594fbb['code_url']; ?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title>微信支付样例-退款</title>
</head>
<body>
	<div style="margin-left: 10px;color:#556B2F;font-size:30px;font-weight: bolder;">扫描支付模式一</div><br/>
	<img alt="模式一扫码支付" src="http://paysdk.weixin.qq.com/example/qrcode.php?data=<?php  echo urlencode($spe7131c); ?>
" style="width:150px;height:150px;"/>
	<br/><br/><br/>
	<div style="margin-left: 10px;color:#556B2F;font-size:30px;font-weight: bolder;">扫描支付模式二</div><br/>
	<img alt="模式二扫码支付" src="http://paysdk.weixin.qq.com/example/qrcode.php?data=<?php  echo urlencode($sp137ee2); ?>
" style="width:150px;height:150px;"/>
	
</body>
</html><?php 