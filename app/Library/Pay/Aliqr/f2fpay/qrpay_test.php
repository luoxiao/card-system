<?php
header('Content-type: text/html; charset=utf-8'); require_once 'model/builder/AlipayTradePrecreateContentBuilder.php'; require_once 'service/AlipayTradeService.php'; if (!empty($_POST['out_trade_no']) && trim($_POST['out_trade_no']) != '') { $sp9489f3 = $_POST['out_trade_no']; $sp942f8c = $_POST['subject']; $spba8d46 = $_POST['total_amount']; $sp9285e4 = '0.01'; $spd86457 = '购买商品2件共15.00元'; $sp517618 = ''; $spcbd2d3 = ''; $sp742c6b = ''; $spd7263b = ''; $sp1332f7 = new ExtendParams(); $sp1332f7->setSysServiceProviderId($spd7263b); $sp14899c = $sp1332f7->getExtendParams(); $sp89a043 = '5m'; $sp54d44e = array(); $sp60011f = new GoodsDetail(); $sp60011f->setGoodsId('apple-01'); $sp60011f->setGoodsName('iphone'); $sp60011f->setPrice(3000); $sp60011f->setQuantity(1); $spcd8ad7 = $sp60011f->getGoodsDetail(); $spf940c7 = new GoodsDetail(); $spf940c7->setGoodsId('apple-02'); $spf940c7->setGoodsName('ipad'); $spf940c7->setPrice(1000); $spf940c7->setQuantity(1); $sp307811 = $spf940c7->getGoodsDetail(); $sp54d44e = array($spcd8ad7, $sp307811); $sp460415 = ''; $spebf3ad = new AlipayTradePrecreateContentBuilder(); $spebf3ad->setOutTradeNo($sp9489f3); $spebf3ad->setTotalAmount($spba8d46); $spebf3ad->setTimeExpress($sp89a043); $spebf3ad->setSubject($sp942f8c); $spebf3ad->setBody($spd86457); $spebf3ad->setUndiscountableAmount($sp9285e4); $spebf3ad->setExtendParams($sp14899c); $spebf3ad->setGoodsDetailList($sp54d44e); $spebf3ad->setStoreId($spcbd2d3); $spebf3ad->setOperatorId($sp517618); $spebf3ad->setAlipayStoreId($sp742c6b); $spebf3ad->setAppAuthToken($sp460415); $sp3c17b8 = new AlipayTradeService($sp54f11a); $sp640ffe = $sp3c17b8->qrPay($spebf3ad); switch ($sp640ffe->getTradeStatus()) { case 'SUCCESS': echo '支付宝创建订单二维码成功:' . '<br>---------------------------------------<br>'; $sp651d08 = $sp640ffe->getResponse(); $sp940fa2 = $sp3c17b8->create_erweima($sp651d08->qr_code); echo $sp940fa2; print_r($sp651d08); break; case 'FAILED': echo '支付宝创建订单二维码失败!!!' . '<br>--------------------------<br>'; if (!empty($sp640ffe->getResponse())) { print_r($sp640ffe->getResponse()); } break; case 'UNKNOWN': echo '系统异常，状态未知!!!' . '<br>--------------------------<br>'; if (!empty($sp640ffe->getResponse())) { print_r($sp640ffe->getResponse()); } break; default: echo '不支持的返回状态，创建订单二维码返回异常!!!'; break; } return; } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
	<title>支付宝当面付 二维码支付</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
*{
	margin:0;
	padding:0;
}
ul,ol{
	list-style:none;
}
.title{
    color: #ADADAD;
    font-size: 14px;
    font-weight: bold;
    padding: 8px 16px 5px 10px;
}
.hidden{
	display:none;
}

.new-btn-login-sp{
	border:1px solid #D74C00;
	padding:1px;
	display:inline-block;
}

.new-btn-login{
    background-color: transparent;
    background-image: url("../img/new-btn-fixed.png");
    border: medium none;
}
.new-btn-login{
    background-position: 0 -198px;
    width: 82px;
	color: #FFFFFF;
    font-weight: bold;
    height: 28px;
    line-height: 28px;
    padding: 0 10px 3px;
}
.new-btn-login:hover{
	background-position: 0 -167px;
	width: 82px;
	color: #FFFFFF;
    font-weight: bold;
    height: 28px;
    line-height: 28px;
    padding: 0 10px 3px;
}
.bank-list{
	overflow:hidden;
	margin-top:5px;
}
.bank-list li{
	float:left;
	width:153px;
	margin-bottom:5px;
}

#main{
	width:750px;
	margin:0 auto;
	font-size:14px;
	font-family:'宋体';
}
#logo{
	background-color: transparent;
    background-image: url("../img/new-btn-fixed.png");
    border: medium none;
	background-position:0 0;
	width:166px;
	height:35px;
    float:left;
}
.red-star{
	color:#f00;
	width:10px;
	display:inline-block;
}
.null-star{
	color:#fff;
}
.content{
	margin-top:5px;
}

.content dt{
	width:160px;
	display:inline-block;
	text-align:right;
	float:left;
	
}
.content dd{
	margin-left:100px;
	margin-bottom:5px;
}
#foot{
	margin-top:10px;
}
.foot-ul li {
	text-align:center;
}
.note-help {
    color: #999999;
    font-size: 12px;
    line-height: 130%;
    padding-left: 3px;
}

.cashier-nav {
    font-size: 14px;
    margin: 15px 0 10px;
    text-align: left;
    height:30px;
    border-bottom:solid 2px #CFD2D7;
}
.cashier-nav ol li {
    float: left;
}
.cashier-nav li.current {
    color: #AB4400;
    font-weight: bold;
}
.cashier-nav li.last {
    clear:right;
}
.alipay_link {
    text-align:right;
}
.alipay_link a:link{
    text-decoration:none;
    color:#8D8D8D;
}
.alipay_link a:visited{
    text-decoration:none;
    color:#8D8D8D;
}
</style>
</head>
<body text=#000000 bgColor="#ffffff" leftMargin=0 topMargin=4>
	<div id="main">
		<div id="head">
            <dl class="alipay_link">
                <a target="_blank" href="http://www.alipay.com/"><span>支付宝首页</span></a>|
                <a target="_blank" href="https://b.alipay.com/home.htm"><span>商家服务</span></a>|
                <a target="_blank" href="http://help.alipay.com/support/index_sh.htm"><span>帮助中心</span></a>
            </dl>
            <span class="title">支付宝统一预下单接口快速通道</span>
		</div>
        <div class="cashier-nav">
            <ol>
				<li class="current">1、确认信息 →</li>
				<li>2、点击确认 →</li>
				<li class="last">3、确认完成</li>
            </ol>
        </div>
        <form name=alipayment action="" method=post>
            <div id="body" style="clear:left">
                <dl class="content">
					<dt>商户订单号：</dt>
					<dd>
						<span class="null-star">*</span>
						<input size="30" name="out_trade_no" value="201755654" />
						<span>商户网站订单系统中唯一订单号，必填
</span>
					</dd>
					<dt>订单名称：</dt>
					<dd>
						<span class="null-star">*</span>
						<input size="30" name="subject" value="ce223" />
						<span>必填
</span>
					</dd>
					
					<dt>付款金额：</dt>
					<dd>
						<span class="null-star">*</span>
						<input size="30" name="total_amount" value="0.01" />
						<span>必填
</span>
					</dd>
					
					
                    <dt></dt>
                    <dd>
                        <span class="new-btn-login-sp">
                            <button class="new-btn-login" type="submit" style="text-align:center;">确 认</button>
                        </span>
                    </dd>
                </dl>
            </div>
		</form>
        <div id="foot">
			<ul class="foot-ul">
				<li><font class="note-help">如果您点击“确认”按钮，即表示您同意该次的执行操作。 </font></li>
				<li>
					支付宝版权所有 2011-2015 ALIPAY.COM 
				</li>
			</ul>
		</div>
	</div>
</body>
</html><?php 