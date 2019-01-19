<?php
class fakala { public $gateway; public $uid; public $key; public function __construct($sp638b26, $spae6a5b, $spb5c5a0) { $this->gateway = $sp638b26; $this->uid = $spae6a5b; $this->key = $spb5c5a0; } function getSignStr($sp5e6808) { ksort($sp5e6808); $spad17d4 = ''; foreach ($sp5e6808 as $sp467973 => $sp06d9c9) { if ('sign' !== $sp467973) { $spad17d4 .= $sp467973 . '=' . ($sp06d9c9 ? $sp06d9c9 : '') . '&'; } } return $spad17d4; } function getSign($sp5e6808, $spb5c5a0, &$sp7eb55b = false) { $spad17d4 = self::getSignStr($sp5e6808); $sp7b1c1e = md5($spad17d4 . 'key=' . $spb5c5a0); if ($sp7eb55b !== false) { $sp7eb55b = $spad17d4 . 'sign=' . $sp7b1c1e; } return $sp7b1c1e; } function goPay($spc21a73, $sp79d97c, $sp197757, $sp1ae8d8, $speefbd3, $sp82b2fc, $sp72a819) { $sp5e6808 = array('uid' => (int) $this->uid, 'out_trade_no' => $sp79d97c, 'total_fee' => (int) $sp1ae8d8, 'cost' => (int) $sp197757, 'payway' => $spc21a73, 'return_url' => $sp82b2fc, 'notify_url' => $sp72a819, 'attach' => $speefbd3); $sp5e6808['sign'] = $this->getSign($sp5e6808, $this->key); die('
<!doctype html>
<html>
<head>
    <title>正在转到付款页</title>
</head>
<body onload="document.pay.submit()">
<form name="pay" action="' . $this->gateway . '/api/order" method="post">
    <input type="hidden" name="uid" value="' . $sp5e6808['uid'] . '">
    <input type="hidden" name="out_trade_no" value="' . $sp5e6808['out_trade_no'] . '">
    <input type="hidden" name="total_fee" value="' . $sp5e6808['total_fee'] . '">
    <input type="hidden" name="cost" value="' . $sp5e6808['cost'] . '">
    <input type="hidden" name="payway" value="' . $sp5e6808['payway'] . '">
    <input type="hidden" name="return_url" value="' . $sp5e6808['return_url'] . '">
    <input type="hidden" name="notify_url" value="' . $sp5e6808['notify_url'] . '">
    <input type="hidden" name="attach" value="' . $sp5e6808['attach'] . '">
    <input type="hidden" name="sign" value="' . $sp5e6808['sign'] . '">
</form>
</body>
        '); } function notify_verify() { $sp5e6808 = $_POST; if (@$sp5e6808['sign'] === $this->getSign($sp5e6808, $this->key)) { echo 'success'; return true; } else { echo 'fail'; return false; } } function return_verify() { $sp5e6808 = $_GET; if (@$sp5e6808['sign'] === $this->getSign($sp5e6808, $this->key)) { return true; } else { return false; } } }