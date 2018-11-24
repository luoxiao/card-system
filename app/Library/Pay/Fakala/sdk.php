<?php
class fakala { public $gateway; public $uid; public $key; public function __construct($sp4b4201, $spe6149b, $sp63ae76) { $this->gateway = $sp4b4201; $this->uid = $spe6149b; $this->key = $sp63ae76; } function getSignStr($sp31ee10) { ksort($sp31ee10); $spc71de0 = ''; foreach ($sp31ee10 as $spf169bd => $spb83a69) { if ('sign' !== $spf169bd) { $spc71de0 .= $spf169bd . '=' . ($spb83a69 ? $spb83a69 : '') . '&'; } } return $spc71de0; } function getSign($sp31ee10, $sp63ae76, &$spc45df6 = false) { $spc71de0 = self::getSignStr($sp31ee10); $sp36c1ea = md5($spc71de0 . 'key=' . $sp63ae76); if ($spc45df6 !== false) { $spc45df6 = $spc71de0 . 'sign=' . $sp36c1ea; } return $sp36c1ea; } function goPay($sp3e72e0, $sp6281ad, $sp2ea26c, $spf4aff4, $spd14706, $spd05e65, $spbc65a7) { $sp31ee10 = array('uid' => (int) $this->uid, 'out_trade_no' => $sp6281ad, 'total_fee' => (int) $spf4aff4, 'cost' => (int) $sp2ea26c, 'payway' => $sp3e72e0, 'return_url' => $spd05e65, 'notify_url' => $spbc65a7, 'attach' => $spd14706); $sp31ee10['sign'] = $this->getSign($sp31ee10, $this->key); die('
<!doctype html>
<html>
<head>
    <title>正在转到付款页</title>
</head>
<body onload="document.pay.submit()">
<form name="pay" action="' . $this->gateway . '/api/order" method="post">
    <input type="hidden" name="uid" value="' . $sp31ee10['uid'] . '">
    <input type="hidden" name="out_trade_no" value="' . $sp31ee10['out_trade_no'] . '">
    <input type="hidden" name="total_fee" value="' . $sp31ee10['total_fee'] . '">
    <input type="hidden" name="cost" value="' . $sp31ee10['cost'] . '">
    <input type="hidden" name="payway" value="' . $sp31ee10['payway'] . '">
    <input type="hidden" name="return_url" value="' . $sp31ee10['return_url'] . '">
    <input type="hidden" name="notify_url" value="' . $sp31ee10['notify_url'] . '">
    <input type="hidden" name="attach" value="' . $sp31ee10['attach'] . '">
    <input type="hidden" name="sign" value="' . $sp31ee10['sign'] . '">
</form>
</body>
        '); } function notify_verify() { $sp31ee10 = $_POST; if ($sp31ee10['sign'] === $this->getSign($sp31ee10, $this->key)) { echo 'success'; return true; } else { echo 'fail'; return false; } } function return_verify() { $sp31ee10 = $_GET; if ($sp31ee10['sign'] === $this->getSign($sp31ee10, $this->key)) { return true; } else { return false; } } }