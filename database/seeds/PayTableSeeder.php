<?php
use Illuminate\Database\Seeder; class PayTableSeeder extends Seeder { private function initPay() { $sp468ee2 = new \App\Pay(); $sp468ee2->name = '支付宝'; $sp468ee2->img = '/plugins/images/ali.png'; $sp468ee2->driver = 'Fakala'; $sp468ee2->way = 'alipay'; $sp468ee2->comment = 'alipay、alipaywap、wx、wxwap、qq、qqwap'; $sp468ee2->config = '{
  "gateway": "http://card.evil5.com",
  "api_id": "your api_id",
  "api_key": "your api_key"
}'; $sp468ee2->enabled = \App\Pay::ENABLED_PC; $sp468ee2->save(); $sp468ee2 = new \App\Pay(); $sp468ee2->name = '支付宝'; $sp468ee2->img = '/plugins/images/ali.png'; $sp468ee2->driver = 'Fakala'; $sp468ee2->way = 'alipaywap'; $sp468ee2->comment = 'alipay、alipaywap、wx、wxwap、qq、qqwap'; $sp468ee2->config = '{
  "gateway": "http://card.evil5.com",
  "api_id": "your api_id",
  "api_key": "your api_key"
}'; $sp468ee2->enabled = \App\Pay::ENABLED_MOBILE; $sp468ee2->save(); $sp468ee2 = new \App\Pay(); $sp468ee2->name = '微信'; $sp468ee2->img = '/plugins/images/wx.png'; $sp468ee2->driver = 'Fakala'; $sp468ee2->way = 'wx'; $sp468ee2->comment = 'alipay、alipaywap、wx、wxwap、qq、qqwap'; $sp468ee2->config = '{
  "gateway": "http://card.evil5.com",
  "api_id": "your api_id",
  "api_key": "your api_key"
}'; $sp468ee2->enabled = \App\Pay::ENABLED_ALL; $sp468ee2->save(); $sp468ee2 = new \App\Pay(); $sp468ee2->name = '支付宝'; $sp468ee2->img = '/plugins/images/ali.png'; $sp468ee2->driver = 'Alipay'; $sp468ee2->way = 'Alipay'; $sp468ee2->comment = '支付宝 - 即时到账套餐(企业)V2'; $sp468ee2->config = '{
  "partner": "partner",
  "key": "key"
}'; $sp468ee2->enabled = \App\Pay::ENABLED_PC; $sp468ee2->save(); $sp468ee2 = new \App\Pay(); $sp468ee2->name = '支付宝'; $sp468ee2->img = '/plugins/images/ali.png'; $sp468ee2->driver = 'Aliwap'; $sp468ee2->way = 'Aliwap'; $sp468ee2->comment = '支付宝 - 高级手机网站支付V4'; $sp468ee2->config = '{
  "partner": "partner",
  "key": "key"
}'; $sp468ee2->enabled = \App\Pay::ENABLED_MOBILE; $sp468ee2->save(); $sp468ee2 = new \App\Pay(); $sp468ee2->name = '支付宝扫码'; $sp468ee2->img = '/plugins/images/ali.png'; $sp468ee2->driver = 'Aliqr'; $sp468ee2->way = 'Aliqr'; $sp468ee2->comment = '支付宝 - 当面付'; $sp468ee2->config = '{
  "app_id": "app_id",
  "alipay_public_key": "alipay_public_key",
  "merchant_private_key": "merchant_private_key"
}'; $sp468ee2->enabled = \App\Pay::ENABLED_ALL; $sp468ee2->save(); $sp468ee2 = new \App\Pay(); $sp468ee2->name = '微信扫码'; $sp468ee2->img = '/plugins/images/wx.png'; $sp468ee2->driver = 'WeChat'; $sp468ee2->way = 'NATIVE'; $sp468ee2->comment = '微信支付 - 扫码'; $sp468ee2->config = '{
  "APPID": "APPID",
  "APPSECRET": "APPSECRET",
  "MCHID": "商户ID",
  "KEY": "KEY"
}'; $sp468ee2->enabled = \App\Pay::ENABLED_ALL; $sp468ee2->save(); $sp468ee2 = new \App\Pay(); $sp468ee2->name = '微信H5'; $sp468ee2->img = '/plugins/images/wx.png'; $sp468ee2->driver = 'WeChat'; $sp468ee2->way = 'MWEB'; $sp468ee2->comment = '微信支付 - H5 (需要开通权限)'; $sp468ee2->config = '{
  "APPID": "APPID",
  "APPSECRET": "APPSECRET",
  "MCHID": "商户ID",
  "KEY": "KEY"
}'; $sp468ee2->enabled = \App\Pay::ENABLED_MOBILE; $sp468ee2->save(); $sp468ee2 = new \App\Pay(); $sp468ee2->name = '手机QQ'; $sp468ee2->img = '/plugins/images/qq.png'; $sp468ee2->driver = 'QPay'; $sp468ee2->way = 'NATIVE'; $sp468ee2->comment = '手机QQ - 扫码'; $sp468ee2->config = '{
  "mch_id": "mch_id",
  "mch_key": "mch_key"
}'; $sp468ee2->enabled = \App\Pay::ENABLED_ALL; $sp468ee2->save(); $sp468ee2 = new \App\Pay(); $sp468ee2->name = '支付宝'; $sp468ee2->img = '/plugins/images/ali.png'; $sp468ee2->driver = 'Youzan'; $sp468ee2->way = 'alipay'; $sp468ee2->comment = '有赞支付 - 支付宝'; $sp468ee2->config = '{
  "client_id": "client_id",
  "client_secret": "client_secret",
  "kdt_id": "kdt_id"
}'; $sp468ee2->enabled = \App\Pay::ENABLED_ALL; $sp468ee2->save(); $sp468ee2 = new \App\Pay(); $sp468ee2->name = '微信'; $sp468ee2->img = '/plugins/images/wx.png'; $sp468ee2->driver = 'Youzan'; $sp468ee2->way = 'wechat'; $sp468ee2->comment = '有赞支付 - 微信'; $sp468ee2->config = '{
  "client_id": "client_id",
  "client_secret": "client_secret",
  "kdt_id": "kdt_id"
}'; $sp468ee2->enabled = \App\Pay::ENABLED_ALL; $sp468ee2->save(); $sp468ee2 = new \App\Pay(); $sp468ee2->name = '手机QQ'; $sp468ee2->img = '/plugins/images/qq.png'; $sp468ee2->driver = 'Youzan'; $sp468ee2->way = 'qq'; $sp468ee2->comment = '有赞支付 - 手机QQ'; $sp468ee2->config = '{
  "client_id": "client_id",
  "client_secret": "client_secret",
  "kdt_id": "kdt_id"
}'; $sp468ee2->enabled = \App\Pay::ENABLED_ALL; $sp468ee2->save(); $sp468ee2 = new \App\Pay(); $sp468ee2->name = '支付宝'; $sp468ee2->img = '/plugins/images/ali.png'; $sp468ee2->driver = 'CodePay'; $sp468ee2->way = 'alipay'; $sp468ee2->comment = '码支付 - 支付宝'; $sp468ee2->config = '{
  "id": "id",
  "key": "key"
}'; $sp468ee2->fee_system = 0; $sp468ee2->enabled = \App\Pay::ENABLED_ALL; $sp468ee2->save(); $sp468ee2 = new \App\Pay(); $sp468ee2->name = '微信'; $sp468ee2->img = '/plugins/images/wx.png'; $sp468ee2->driver = 'CodePay'; $sp468ee2->way = 'weixin'; $sp468ee2->comment = '码支付 - 微信'; $sp468ee2->config = '{
  "id": "id",
  "key": "key"
}'; $sp468ee2->fee_system = 0; $sp468ee2->enabled = \App\Pay::ENABLED_ALL; $sp468ee2->save(); $sp468ee2 = new \App\Pay(); $sp468ee2->name = '手机QQ'; $sp468ee2->img = '/plugins/images/qq.png'; $sp468ee2->driver = 'CodePay'; $sp468ee2->way = 'qq'; $sp468ee2->comment = '码支付 - 手机QQ'; $sp468ee2->config = '{
  "id": "id",
  "key": "key"
}'; $sp468ee2->fee_system = 0; $sp468ee2->enabled = \App\Pay::ENABLED_ALL; $sp468ee2->save(); } public function run() { self::initPay(); } }