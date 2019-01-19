<?php
ini_set('date.timezone', 'Asia/Shanghai'); require_once '../lib/WxPay.Api.php'; require_once 'WxPay.JsApiPay.php'; require_once 'log.php'; $sp08ba31 = new CLogFileHandler('../logs/' . date('Y-m-d') . '.log'); $sp72b4d7 = Log::Init($sp08ba31, 15); function printf_info($sp631d11) { foreach ($sp631d11 as $spb5c5a0 => $spd77a65) { echo "<font color='#00ff55;'>{$spb5c5a0}</font> : {$spd77a65} <br/>"; } } $spf382ac = new JsApiPay(); $sp8dcb31 = $spf382ac->GetOpenid(); $spf7fa80 = new WxPayUnifiedOrder(); $spf7fa80->SetBody('test'); $spf7fa80->SetAttach('test'); $spf7fa80->SetOut_trade_no(WxPayConfig::MCHID . date('YmdHis')); $spf7fa80->SetTotal_fee('1'); $spf7fa80->SetTime_start(date('YmdHis')); $spf7fa80->SetTime_expire(date('YmdHis', time() + 600)); $spf7fa80->SetGoods_tag('test'); $spf7fa80->SetNotify_url('http://paysdk.weixin.qq.com/example/notify.php'); $spf7fa80->SetTrade_type('JSAPI'); $spf7fa80->SetOpenid($sp8dcb31); $sp871a53 = WxPayApi::unifiedOrder($spf7fa80); echo '<font color="#f00"><b>统一下单支付单信息</b></font><br/>'; printf_info($sp871a53); $sp07fec0 = $spf382ac->GetJsApiParameters($sp871a53); $sp465a9e = $spf382ac->GetEditAddressParameters(); ?>

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
			<?php  echo $sp07fec0; ?>
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
			<?php  echo $sp465a9e; ?>
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