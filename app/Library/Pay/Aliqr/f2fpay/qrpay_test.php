<?php
header('Content-type: text/html; charset=utf-8'); require_once 'model/builder/AlipayTradePrecreateContentBuilder.php'; require_once 'service/AlipayTradeService.php'; if (!empty($_POST['out_trade_no']) && trim($_POST['out_trade_no']) != '') { $sp7bb339 = $_POST['out_trade_no']; $sp547016 = $_POST['subject']; $sp5eb2a4 = $_POST['total_amount']; $spb039d1 = '0.01'; $speb838e = '购买商品2件共15.00元'; $sp0413f5 = ''; $spd3ddfb = ''; $sp25cbce = ''; $sp91c0e4 = ''; $spfd2e78 = new ExtendParams(); $spfd2e78->setSysServiceProviderId($sp91c0e4); $spd1488e = $spfd2e78->getExtendParams(); $sp17ceb1 = '5m'; $sp492596 = array(); $spcf6def = new GoodsDetail(); $spcf6def->setGoodsId('apple-01'); $spcf6def->setGoodsName('iphone'); $spcf6def->setPrice(3000); $spcf6def->setQuantity(1); $specec85 = $spcf6def->getGoodsDetail(); $sp9442e0 = new GoodsDetail(); $sp9442e0->setGoodsId('apple-02'); $sp9442e0->setGoodsName('ipad'); $sp9442e0->setPrice(1000); $sp9442e0->setQuantity(1); $sp85e6ce = $sp9442e0->getGoodsDetail(); $sp492596 = array($specec85, $sp85e6ce); $spcf8a97 = ''; $spf253b5 = new AlipayTradePrecreateContentBuilder(); $spf253b5->setOutTradeNo($sp7bb339); $spf253b5->setTotalAmount($sp5eb2a4); $spf253b5->setTimeExpress($sp17ceb1); $spf253b5->setSubject($sp547016); $spf253b5->setBody($speb838e); $spf253b5->setUndiscountableAmount($spb039d1); $spf253b5->setExtendParams($spd1488e); $spf253b5->setGoodsDetailList($sp492596); $spf253b5->setStoreId($spd3ddfb); $spf253b5->setOperatorId($sp0413f5); $spf253b5->setAlipayStoreId($sp25cbce); $spf253b5->setAppAuthToken($spcf8a97); $sp873196 = new AlipayTradeService($sp8abf69); $sp9e6c0b = $sp873196->qrPay($spf253b5); switch ($sp9e6c0b->getTradeStatus()) { case 'SUCCESS': echo '支付宝创建订单二维码成功:' . '<br>---------------------------------------<br>'; $sp5241d0 = $sp9e6c0b->getResponse(); $spbf715c = $sp873196->create_erweima($sp5241d0->qr_code); echo $spbf715c; print_r($sp5241d0); break; case 'FAILED': echo '支付宝创建订单二维码失败!!!' . '<br>--------------------------<br>'; if (!empty($sp9e6c0b->getResponse())) { print_r($sp9e6c0b->getResponse()); } break; case 'UNKNOWN': echo '系统异常，状态未知!!!' . '<br>--------------------------<br>'; if (!empty($sp9e6c0b->getResponse())) { print_r($sp9e6c0b->getResponse()); } break; default: echo '不支持的返回状态，创建订单二维码返回异常!!!'; break; } return; } ?>
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