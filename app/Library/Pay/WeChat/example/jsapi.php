<?php
ini_set('date.timezone', 'Asia/Shanghai'); require_once '../lib/WxPay.Api.php'; require_once 'WxPay.JsApiPay.php'; require_once 'log.php'; $sp96c2fa = new CLogFileHandler('../logs/' . date('Y-m-d') . '.log'); $spa973ce = Log::Init($sp96c2fa, 15); function printf_info($sp38c5ae) { foreach ($sp38c5ae as $spa8a71b => $spffe9f9) { echo "<font color='#00ff55;'>{$spa8a71b}</font> : {$spffe9f9} <br/>"; } } $spfb18f6 = new JsApiPay(); $spbb4599 = $spfb18f6->GetOpenid(); $sp11f4cb = new WxPayUnifiedOrder(); $sp11f4cb->SetBody('test'); $sp11f4cb->SetAttach('test'); $sp11f4cb->SetOut_trade_no(WxPayConfig::MCHID . date('YmdHis')); $sp11f4cb->SetTotal_fee('1'); $sp11f4cb->SetTime_start(date('YmdHis')); $sp11f4cb->SetTime_expire(date('YmdHis', time() + 600)); $sp11f4cb->SetGoods_tag('test'); $sp11f4cb->SetNotify_url('http://paysdk.weixin.qq.com/example/notify.php'); $sp11f4cb->SetTrade_type('JSAPI'); $sp11f4cb->SetOpenid($spbb4599); $spc9222b = WxPayApi::unifiedOrder($sp11f4cb); echo '<font color="#f00"><b>统一下单支付单信息</b></font><br/>'; printf_info($spc9222b); $sp1e05da = $spfb18f6->GetJsApiParameters($spc9222b); $sp6f960e = $spfb18f6->GetEditAddressParameters(); ?>

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
			<?php  echo $sp1e05da; ?>
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
			<?php  echo $sp6f960e; ?>
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