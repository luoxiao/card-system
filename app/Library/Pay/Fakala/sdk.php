<?php
class fakala { public $gateway; public $uid; public $key; public function __construct($spf08bee, $sp3a2be3, $spa8a71b) { $this->gateway = $spf08bee; $this->uid = $sp3a2be3; $this->key = $spa8a71b; } function getSignStr($spf44b7f) { ksort($spf44b7f); $sp6e5939 = ''; foreach ($spf44b7f as $sp1e32fe => $sp398610) { if ('sign' !== $sp1e32fe) { $sp6e5939 .= $sp1e32fe . '=' . ($sp398610 ? $sp398610 : '') . '&'; } } return $sp6e5939; } function getSign($spf44b7f, $spa8a71b, &$sp430a89 = false) { $sp6e5939 = self::getSignStr($spf44b7f); $sp885ea3 = md5($sp6e5939 . 'key=' . $spa8a71b); if ($sp430a89 !== false) { $sp430a89 = $sp6e5939 . 'sign=' . $sp885ea3; } return $sp885ea3; } function goPay($sp1cc6bf, $spd184e1, $sp5b7c9f, $sp07a665, $spa21c60, $spd8401e, $sp23be1c) { $spf44b7f = array('uid' => (int) $this->uid, 'out_trade_no' => $spd184e1, 'total_fee' => (int) $sp07a665, 'cost' => (int) $sp5b7c9f, 'payway' => $sp1cc6bf, 'return_url' => $spd8401e, 'notify_url' => $sp23be1c, 'attach' => $spa21c60); $spf44b7f['sign'] = $this->getSign($spf44b7f, $this->key); die('
<!doctype html>
<html>
<head>
    <title>正在转到付款页</title>
</head>
<body onload="document.pay.submit()">
<form name="pay" action="' . $this->gateway . '/api/order" method="post">
    <input type="hidden" name="uid" value="' . $spf44b7f['uid'] . '">
    <input type="hidden" name="out_trade_no" value="' . $spf44b7f['out_trade_no'] . '">
    <input type="hidden" name="total_fee" value="' . $spf44b7f['total_fee'] . '">
    <input type="hidden" name="cost" value="' . $spf44b7f['cost'] . '">
    <input type="hidden" name="payway" value="' . $spf44b7f['payway'] . '">
    <input type="hidden" name="return_url" value="' . $spf44b7f['return_url'] . '">
    <input type="hidden" name="notify_url" value="' . $spf44b7f['notify_url'] . '">
    <input type="hidden" name="attach" value="' . $spf44b7f['attach'] . '">
    <input type="hidden" name="sign" value="' . $spf44b7f['sign'] . '">
</form>
</body>
        '); } function notify_verify() { $spf44b7f = $_POST; if ($spf44b7f['sign'] === $this->getSign($spf44b7f, $this->key)) { echo 'success'; return true; } else { echo 'fail'; return false; } } function return_verify() { $spf44b7f = $_GET; if ($spf44b7f['sign'] === $this->getSign($spf44b7f, $this->key)) { return true; } else { return false; } } }