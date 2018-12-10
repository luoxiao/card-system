<?php
ini_set('date.timezone', 'Asia/Shanghai'); require_once '../lib/WxPay.Api.php'; require_once 'WxPay.NativePay.php'; require_once 'log.php'; $sp58471a = new NativePay(); $spc1c6a9 = $sp58471a->GetPrePayUrl('123456789'); $sp63ca0e = new WxPayUnifiedOrder(); $sp63ca0e->SetBody('test'); $sp63ca0e->SetAttach('test'); $sp63ca0e->SetOut_trade_no(WxPayConfig::MCHID . date('YmdHis')); $sp63ca0e->SetTotal_fee('1'); $sp63ca0e->SetTime_start(date('YmdHis')); $sp63ca0e->SetTime_expire(date('YmdHis', time() + 600)); $sp63ca0e->SetGoods_tag('test'); $sp63ca0e->SetNotify_url('http://paysdk.weixin.qq.com/example/notify.php'); $sp63ca0e->SetTrade_type('NATIVE'); $sp63ca0e->SetProduct_id('123456789'); $spfe67da = $sp58471a->GetPayUrl($sp63ca0e); $sp55d5bf = $spfe67da['code_url']; ?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title>微信支付样例-退款</title>
</head>
<body>
	<div style="margin-left: 10px;color:#556B2F;font-size:30px;font-weight: bolder;">扫描支付模式一</div><br/>
	<img alt="模式一扫码支付" src="http://paysdk.weixin.qq.com/example/qrcode.php?data=<?php  echo urlencode($spc1c6a9); ?>
" style="width:150px;height:150px;"/>
	<br/><br/><br/>
	<div style="margin-left: 10px;color:#556B2F;font-size:30px;font-weight: bolder;">扫描支付模式二</div><br/>
	<img alt="模式二扫码支付" src="http://paysdk.weixin.qq.com/example/qrcode.php?data=<?php  echo urlencode($sp55d5bf); ?>
" style="width:150px;height:150px;"/>
	
</body>
</html><?php 