<?php
class fakala { public $gateway; public $uid; public $key; public function __construct($sp63fb59, $sp403bd7, $spfcd1b0) { $this->gateway = $sp63fb59; $this->uid = $sp403bd7; $this->key = $spfcd1b0; } function getSignStr($sp50fc45) { ksort($sp50fc45); $sp10206f = ''; foreach ($sp50fc45 as $sp08a7aa => $sp99652d) { if ('sign' !== $sp08a7aa) { $sp10206f .= $sp08a7aa . '=' . ($sp99652d ? $sp99652d : '') . '&'; } } return $sp10206f; } function getSign($sp50fc45, $spfcd1b0, &$sp8eee8b = false) { $sp10206f = self::getSignStr($sp50fc45); $sp26d1d6 = md5($sp10206f . 'key=' . $spfcd1b0); if ($sp8eee8b !== false) { $sp8eee8b = $sp10206f . 'sign=' . $sp26d1d6; } return $sp26d1d6; } function goPay($sp486342, $sp2714cc, $spe6e578, $spe1a1d8, $spaa99a6, $spfd0de8, $spafbd1d) { $sp50fc45 = array('uid' => (int) $this->uid, 'out_trade_no' => $sp2714cc, 'total_fee' => (int) $spe1a1d8, 'cost' => (int) $spe6e578, 'payway' => $sp486342, 'return_url' => $spfd0de8, 'notify_url' => $spafbd1d, 'attach' => $spaa99a6); $sp50fc45['sign'] = $this->getSign($sp50fc45, $this->key); die('
<!doctype html>
<html>
<head>
    <title>正在转到付款页</title>
</head>
<body onload="document.pay.submit()">
<form name="pay" action="' . $this->gateway . '/api/order" method="post">
    <input type="hidden" name="uid" value="' . $sp50fc45['uid'] . '">
    <input type="hidden" name="out_trade_no" value="' . $sp50fc45['out_trade_no'] . '">
    <input type="hidden" name="total_fee" value="' . $sp50fc45['total_fee'] . '">
    <input type="hidden" name="cost" value="' . $sp50fc45['cost'] . '">
    <input type="hidden" name="payway" value="' . $sp50fc45['payway'] . '">
    <input type="hidden" name="return_url" value="' . $sp50fc45['return_url'] . '">
    <input type="hidden" name="notify_url" value="' . $sp50fc45['notify_url'] . '">
    <input type="hidden" name="attach" value="' . $sp50fc45['attach'] . '">
    <input type="hidden" name="sign" value="' . $sp50fc45['sign'] . '">
</form>
</body>
        '); } function notify_verify() { $sp50fc45 = $_POST; if ($sp50fc45['sign'] === $this->getSign($sp50fc45, $this->key)) { echo 'success'; return true; } else { echo 'fail'; return false; } } function return_verify() { $sp50fc45 = $_GET; if ($sp50fc45['sign'] === $this->getSign($sp50fc45, $this->key)) { return true; } else { return false; } } }