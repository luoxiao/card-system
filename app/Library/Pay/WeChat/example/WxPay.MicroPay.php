<?php
require_once '../lib/WxPay.Api.php'; class MicroPay { public function pay($spe882d7) { $spcc4042 = WxPayApi::micropay($spe882d7, 5); if (!array_key_exists('return_code', $spcc4042) || !array_key_exists('out_trade_no', $spcc4042) || !array_key_exists('result_code', $spcc4042)) { echo '接口调用失败,请确认是否输入是否有误！'; throw new WxPayException('接口调用失败！'); } $spd184e1 = $spe882d7->GetOut_trade_no(); if ($spcc4042['return_code'] == 'SUCCESS' && $spcc4042['result_code'] == 'FAIL' && $spcc4042['err_code'] != 'USERPAYING' && $spcc4042['err_code'] != 'SYSTEMERROR') { return false; } $sp319730 = 10; while ($sp319730 > 0) { $spfdcbcf = 0; $sp552970 = $this->query($spd184e1, $spfdcbcf); if ($spfdcbcf == 2) { sleep(2); continue; } else { if ($spfdcbcf == 1) { return $sp552970; } else { return false; } } } if (!$this->cancel($spd184e1)) { throw new WxpayException('撤销单失败！'); } return false; } public function query($spd184e1, &$sp6c81d0) { $sp8bf013 = new WxPayOrderQuery(); $sp8bf013->SetOut_trade_no($spd184e1); $spcc4042 = WxPayApi::orderQuery($sp8bf013); if ($spcc4042['return_code'] == 'SUCCESS' && $spcc4042['result_code'] == 'SUCCESS') { if ($spcc4042['trade_state'] == 'SUCCESS') { $sp6c81d0 = 1; return $spcc4042; } else { if ($spcc4042['trade_state'] == 'USERPAYING') { $sp6c81d0 = 2; return false; } } } if ($spcc4042['err_code'] == 'ORDERNOTEXIST') { $sp6c81d0 = 0; } else { $sp6c81d0 = 2; } return false; } public function cancel($spd184e1, $sp554af4 = 0) { if ($sp554af4 > 10) { return false; } $sp401bac = new WxPayReverse(); $sp401bac->SetOut_trade_no($spd184e1); $spcc4042 = WxPayApi::reverse($sp401bac); if ($spcc4042['return_code'] != 'SUCCESS') { return false; } if ($spcc4042['result_code'] != 'SUCCESS' && $spcc4042['recall'] == 'N') { return true; } else { if ($spcc4042['recall'] == 'Y') { return $this->cancel($spd184e1, ++$sp554af4); } } return false; } }