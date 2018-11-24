<?php
ini_set('date.timezone', 'Asia/Shanghai'); require_once '../lib/WxPay.Api.php'; require_once 'WxPay.NativePay.php'; require_once 'log.php'; $sp572401 = new NativePay(); $spa98faa = $sp572401->GetPrePayUrl('123456789'); $sp02dbf9 = new WxPayUnifiedOrder(); $sp02dbf9->SetBody('test'); $sp02dbf9->SetAttach('test'); $sp02dbf9->SetOut_trade_no(WxPayConfig::MCHID . date('YmdHis')); $sp02dbf9->SetTotal_fee('1'); $sp02dbf9->SetTime_start(date('YmdHis')); $sp02dbf9->SetTime_expire(date('YmdHis', time() + 600)); $sp02dbf9->SetGoods_tag('test'); $sp02dbf9->SetNotify_url('http://paysdk.weixin.qq.com/example/notify.php'); $sp02dbf9->SetTrade_type('NATIVE'); $sp02dbf9->SetProduct_id('123456789'); $spc4a98e = $sp572401->GetPayUrl($sp02dbf9); $sp0d22e3 = $spc4a98e['code_url']; ?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title>微信支付样例-退款</title>
</head>
<body>
	<div style="margin-left: 10px;color:#556B2F;font-size:30px;font-weight: bolder;">扫描支付模式一</div><br/>
	<img alt="模式一扫码支付" src="http://paysdk.weixin.qq.com/example/qrcode.php?data=<?php  echo urlencode($spa98faa); ?>
" style="width:150px;height:150px;"/>
	<br/><br/><br/>
	<div style="margin-left: 10px;color:#556B2F;font-size:30px;font-weight: bolder;">扫描支付模式二</div><br/>
	<img alt="模式二扫码支付" src="http://paysdk.weixin.qq.com/example/qrcode.php?data=<?php  echo urlencode($sp0d22e3); ?>
" style="width:150px;height:150px;"/>
	
</body>
</html><?php 