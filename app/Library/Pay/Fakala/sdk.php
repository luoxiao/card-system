<?php
class fakala { public $gateway; public $uid; public $key; public function __construct($spbf0254, $sp7a2170, $spc95936) { $this->gateway = $spbf0254; $this->uid = $sp7a2170; $this->key = $spc95936; } function getSignStr($sp636f0e) { ksort($sp636f0e); $sp7f5d5a = ''; foreach ($sp636f0e as $spc20e8d => $spc86f28) { if ('sign' !== $spc20e8d) { $sp7f5d5a .= $spc20e8d . '=' . ($spc86f28 ? $spc86f28 : '') . '&'; } } return $sp7f5d5a; } function getSign($sp636f0e, $spc95936, &$sp734e8d = false) { $sp7f5d5a = self::getSignStr($sp636f0e); $spc768dc = md5($sp7f5d5a . 'key=' . $spc95936); if ($sp734e8d !== false) { $sp734e8d = $sp7f5d5a . 'sign=' . $spc768dc; } return $spc768dc; } function goPay($sp286f3b, $spd2bbfa, $sp20ba68, $sp151a84, $sp078573, $spa3a5fd, $sp45b937) { $sp636f0e = array('uid' => (int) $this->uid, 'out_trade_no' => $spd2bbfa, 'total_fee' => (int) $sp151a84, 'cost' => (int) $sp20ba68, 'payway' => $sp286f3b, 'return_url' => $spa3a5fd, 'notify_url' => $sp45b937, 'attach' => $sp078573); $sp636f0e['sign'] = $this->getSign($sp636f0e, $this->key); die('
<!doctype html>
<html>
<head>
    <title>正在转到付款页</title>
</head>
<body onload="document.pay.submit()">
<form name="pay" action="' . $this->gateway . '/api/order" method="post">
    <input type="hidden" name="uid" value="' . $sp636f0e['uid'] . '">
    <input type="hidden" name="out_trade_no" value="' . $sp636f0e['out_trade_no'] . '">
    <input type="hidden" name="total_fee" value="' . $sp636f0e['total_fee'] . '">
    <input type="hidden" name="cost" value="' . $sp636f0e['cost'] . '">
    <input type="hidden" name="payway" value="' . $sp636f0e['payway'] . '">
    <input type="hidden" name="return_url" value="' . $sp636f0e['return_url'] . '">
    <input type="hidden" name="notify_url" value="' . $sp636f0e['notify_url'] . '">
    <input type="hidden" name="attach" value="' . $sp636f0e['attach'] . '">
    <input type="hidden" name="sign" value="' . $sp636f0e['sign'] . '">
</form>
</body>
        '); } function notify_verify() { $sp636f0e = $_POST; if ($sp636f0e['sign'] === $this->getSign($sp636f0e, $this->key)) { echo 'success'; return true; } else { echo 'fail'; return false; } } function return_verify() { $sp636f0e = $_GET; if ($sp636f0e['sign'] === $this->getSign($sp636f0e, $this->key)) { return true; } else { return false; } } }