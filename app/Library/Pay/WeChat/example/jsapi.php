<?php
ini_set('date.timezone', 'Asia/Shanghai'); require_once '../lib/WxPay.Api.php'; require_once 'WxPay.JsApiPay.php'; require_once 'log.php'; $sp980d2a = new CLogFileHandler('../logs/' . date('Y-m-d') . '.log'); $spa1e99a = Log::Init($sp980d2a, 15); function printf_info($sp151100) { foreach ($sp151100 as $spfcd1b0 => $spd0bf21) { echo "<font color='#00ff55;'>{$spfcd1b0}</font> : {$spd0bf21} <br/>"; } } $sp9cc546 = new JsApiPay(); $spf35e3f = $sp9cc546->GetOpenid(); $sp02dbf9 = new WxPayUnifiedOrder(); $sp02dbf9->SetBody('test'); $sp02dbf9->SetAttach('test'); $sp02dbf9->SetOut_trade_no(WxPayConfig::MCHID . date('YmdHis')); $sp02dbf9->SetTotal_fee('1'); $sp02dbf9->SetTime_start(date('YmdHis')); $sp02dbf9->SetTime_expire(date('YmdHis', time() + 600)); $sp02dbf9->SetGoods_tag('test'); $sp02dbf9->SetNotify_url('http://paysdk.weixin.qq.com/example/notify.php'); $sp02dbf9->SetTrade_type('JSAPI'); $sp02dbf9->SetOpenid($spf35e3f); $sp804c16 = WxPayApi::unifiedOrder($sp02dbf9); echo '<font color="#f00"><b>统一下单支付单信息</b></font><br/>'; printf_info($sp804c16); $sp6426e6 = $sp9cc546->GetJsApiParameters($sp804c16); $spa66fc8 = $sp9cc546->GetEditAddressParameters(); ?>

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
			<?php  echo $sp6426e6; ?>
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
			<?php  echo $spa66fc8; ?>
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