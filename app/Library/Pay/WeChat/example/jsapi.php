<?php
ini_set('date.timezone', 'Asia/Shanghai'); require_once '../lib/WxPay.Api.php'; require_once 'WxPay.JsApiPay.php'; require_once 'log.php'; $sp0d13f3 = new CLogFileHandler('../logs/' . date('Y-m-d') . '.log'); $sp1ac1a0 = Log::Init($sp0d13f3, 15); function printf_info($sp1835de) { foreach ($sp1835de as $sp9684a3 => $spb66e06) { echo "<font color='#00ff55;'>{$sp9684a3}</font> : {$spb66e06} <br/>"; } } $spfc679e = new JsApiPay(); $sp528e61 = $spfc679e->GetOpenid(); $sp51043b = new WxPayUnifiedOrder(); $sp51043b->SetBody('test'); $sp51043b->SetAttach('test'); $sp51043b->SetOut_trade_no(WxPayConfig::MCHID . date('YmdHis')); $sp51043b->SetTotal_fee('1'); $sp51043b->SetTime_start(date('YmdHis')); $sp51043b->SetTime_expire(date('YmdHis', time() + 600)); $sp51043b->SetGoods_tag('test'); $sp51043b->SetNotify_url('http://paysdk.weixin.qq.com/example/notify.php'); $sp51043b->SetTrade_type('JSAPI'); $sp51043b->SetOpenid($sp528e61); $sp7fd294 = WxPayApi::unifiedOrder($sp51043b); echo '<font color="#f00"><b>统一下单支付单信息</b></font><br/>'; printf_info($sp7fd294); $spe460f8 = $spfc679e->GetJsApiParameters($sp7fd294); $sp842aad = $spfc679e->GetEditAddressParameters(); ?>

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
			<?php  echo $spe460f8; ?>
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
			<?php  echo $sp842aad; ?>
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