<?php
namespace App\Library\Pay\Youzan\Open; use Exception; class Client { private static $requestUrl = 'https://open.youzan.com/api/oauthentry/'; private $accessToken; public function __construct($sp49c28b) { if ('' == $sp49c28b) { throw new Exception('access_token不能为空'); } $this->accessToken = $sp49c28b; } public function get($sp1ebc2f, $sp6872c2, $spf44b7f = array()) { return $this->parseResponse(Http::get($this->url($sp1ebc2f, $sp6872c2), $this->buildRequestParams($sp1ebc2f, $spf44b7f))); } public function post($sp1ebc2f, $sp6872c2, $spf44b7f = array(), $spb1ed5c = array()) { return $this->parseResponse(Http::post($this->url($sp1ebc2f, $sp6872c2), $this->buildRequestParams($sp1ebc2f, $spf44b7f), $spb1ed5c)); } public function url($sp1ebc2f, $sp6872c2) { $spe800f6 = explode('.', $sp1ebc2f); $sp1ebc2f = '/' . $sp6872c2 . '/' . $spe800f6[count($spe800f6) - 1]; array_pop($spe800f6); $sp1ebc2f = implode('.', $spe800f6) . $sp1ebc2f; $sp7a0d0d = self::$requestUrl . $sp1ebc2f; return $sp7a0d0d; } private function parseResponse($sp81b572) { $sp38c5ae = json_decode($sp81b572, true); if (null === $sp38c5ae) { throw new Exception('response invalid, data: ' . $sp81b572); } return $sp38c5ae; } private function buildRequestParams($sp1ebc2f, $spc75333) { if (!is_array($spc75333)) { $spc75333 = array(); } $spfb32af = $this->getCommonParams($this->accessToken, $sp1ebc2f); foreach ($spc75333 as $sp1e32fe => $sp398610) { if (isset($spfb32af[$sp1e32fe])) { throw new Exception('参数名冲突'); } $spfb32af[$sp1e32fe] = $sp398610; } return $spfb32af; } private function getCommonParams($sp49c28b, $sp1ebc2f) { $spf44b7f = array(); $spf44b7f[Protocol::TOKEN_KEY] = $sp49c28b; $spf44b7f[Protocol::METHOD_KEY] = $sp1ebc2f; return $spf44b7f; } }