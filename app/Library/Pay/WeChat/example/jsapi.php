<?php
ini_set('date.timezone', 'Asia/Shanghai'); require_once '../lib/WxPay.Api.php'; require_once 'WxPay.JsApiPay.php'; require_once 'log.php'; $spf26d26 = new CLogFileHandler('../logs/' . date('Y-m-d') . '.log'); $sp10de36 = Log::Init($spf26d26, 15); function printf_info($sp2bb3bd) { foreach ($sp2bb3bd as $spc95936 => $sp4d089d) { echo "<font color='#00ff55;'>{$spc95936}</font> : {$sp4d089d} <br/>"; } } $spf591ef = new JsApiPay(); $spee50ce = $spf591ef->GetOpenid(); $sp63ca0e = new WxPayUnifiedOrder(); $sp63ca0e->SetBody('test'); $sp63ca0e->SetAttach('test'); $sp63ca0e->SetOut_trade_no(WxPayConfig::MCHID . date('YmdHis')); $sp63ca0e->SetTotal_fee('1'); $sp63ca0e->SetTime_start(date('YmdHis')); $sp63ca0e->SetTime_expire(date('YmdHis', time() + 600)); $sp63ca0e->SetGoods_tag('test'); $sp63ca0e->SetNotify_url('http://paysdk.weixin.qq.com/example/notify.php'); $sp63ca0e->SetTrade_type('JSAPI'); $sp63ca0e->SetOpenid($spee50ce); $spc73e3b = WxPayApi::unifiedOrder($sp63ca0e); echo '<font color="#f00"><b>统一下单支付单信息</b></font><br/>'; printf_info($spc73e3b); $sp281123 = $spf591ef->GetJsApiParameters($spc73e3b); $sp206902 = $spf591ef->GetEditAddressParameters(); ?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/> 
    <title>微信支付样例-支付</title>
    <script type="text/javascript">
	//调用微信JS api 支付
	function jsApiCall()
	{
		WeixinJSBridge.invoke(
			'getBrandWCPayRequest',
			<?php  echo $sp281123; ?>
,
			function(res){
				WeixinJSBridge.log(res.err_msg);
				alert(res.err_code+res.err_desc+res.err_msg);
			}
		);
	}

	function callpay()
	{
		if (typeof WeixinJSBridge == "undefined"){
		    if( document.addEventListener ){
		        document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
		    }else if (document.attachEvent){
		        document.attachEvent('WeixinJSBridgeReady', jsApiCall); 
		        document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
		    }
		}else{
		    jsApiCall();
		}
	}
	</script>
	<script type="text/javascript">
	//获取共享地址
	function editAddress()
	{
		WeixinJSBridge.invoke(
			'editAddress',
			<?php  echo $sp206902; ?>
,
			function(res){
				var value1 = res.proviceFirstStageName;
				var value2 = res.addressCitySecondStageName;
				var value3 = res.addressCountiesThirdStageName;
				var value4 = res.addressDetailInfo;
				var tel = res.telNumber;
				
				alert(value1 + value2 + value3 + value4 + ":" + tel);
			}
		);
	}
	
	window.onload = function(){
		if (typeof WeixinJSBridge == "undefined"){
		    if( document.addEventListener ){
		        document.addEventListener('WeixinJSBridgeReady', editAddress, false);
		    }else if (document.attachEvent){
		        document.attachEvent('WeixinJSBridgeReady', editAddress); 
		        document.attachEvent('onWeixinJSBridgeReady', editAddress);
		    }
		}else{
			editAddress();
		}
	};
	
	</script>
</head>
<body>
    <br/>
    <font color="#9ACD32"><b>该笔订单支付金额为<span style="color:#f00;font-size:50px">1分</span>钱</b></font><br/><br/>
	<div align="center">
		<button style="width:210px; height:50px; border-radius: 15px;background-color:#FE6714; border:0px #FE6714 solid; cursor: pointer;  color:white;  font-size:16px;" type="button" onclick="callpay()" >立即支付</button>
	</div>
</body>
</html><?php 