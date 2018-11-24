<?php
ini_set('date.timezone', 'Asia/Shanghai'); require_once '../lib/WxPay.Api.php'; require_once 'WxPay.JsApiPay.php'; require_once 'log.php'; $spa904b1 = new CLogFileHandler('../logs/' . date('Y-m-d') . '.log'); $sp01b52a = Log::Init($spa904b1, 15); function printf_info($sp94131d) { foreach ($sp94131d as $sp63ae76 => $sp308e09) { echo "<font color='#00ff55;'>{$sp63ae76}</font> : {$sp308e09} <br/>"; } } $sp4abc5b = new JsApiPay(); $spa2d182 = $sp4abc5b->GetOpenid(); $sp106469 = new WxPayUnifiedOrder(); $sp106469->SetBody('test'); $sp106469->SetAttach('test'); $sp106469->SetOut_trade_no(WxPayConfig::MCHID . date('YmdHis')); $sp106469->SetTotal_fee('1'); $sp106469->SetTime_start(date('YmdHis')); $sp106469->SetTime_expire(date('YmdHis', time() + 600)); $sp106469->SetGoods_tag('test'); $sp106469->SetNotify_url('http://paysdk.weixin.qq.com/example/notify.php'); $sp106469->SetTrade_type('JSAPI'); $sp106469->SetOpenid($spa2d182); $sp33b59d = WxPayApi::unifiedOrder($sp106469); echo '<font color="#f00"><b>统一下单支付单信息</b></font><br/>'; printf_info($sp33b59d); $sp22b70d = $sp4abc5b->GetJsApiParameters($sp33b59d); $sp56c8a6 = $sp4abc5b->GetEditAddressParameters(); ?>

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
			<?php  echo $sp22b70d; ?>
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
			<?php  echo $sp56c8a6; ?>
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