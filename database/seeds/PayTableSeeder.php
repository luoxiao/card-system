<?php
use Illuminate\Database\Seeder; class PayTableSeeder extends Seeder { private function initPay() { $sp77c9d8 = new \App\Pay(); $sp77c9d8->name = '支付宝'; $sp77c9d8->img = '/plugins/images/ali.png'; $sp77c9d8->driver = 'Fakala'; $sp77c9d8->way = 'alipay'; $sp77c9d8->comment = 'alipay、alipaywap、wx、wxwap、qq、qqwap'; $sp77c9d8->config = '{
  "gateway": "http://card.evil5.com",
  "api_id": "your api_id",
  "api_key": "your api_key"
}'; $sp77c9d8->enabled = \App\Pay::ENABLED_PC; $sp77c9d8->save(); $sp77c9d8 = new \App\Pay(); $sp77c9d8->name = '支付宝'; $sp77c9d8->img = '/plugins/images/ali.png'; $sp77c9d8->driver = 'Fakala'; $sp77c9d8->way = 'alipaywap'; $sp77c9d8->comment = 'alipay、alipaywap、wx、wxwap、qq、qqwap'; $sp77c9d8->config = '{
  "gateway": "http://card.evil5.com",
  "api_id": "your api_id",
  "api_key": "your api_key"
}'; $sp77c9d8->enabled = \App\Pay::ENABLED_MOBILE; $sp77c9d8->save(); $sp77c9d8 = new \App\Pay(); $sp77c9d8->name = '微信'; $sp77c9d8->img = '/plugins/images/wx.png'; $sp77c9d8->driver = 'Fakala'; $sp77c9d8->way = 'wx'; $sp77c9d8->comment = 'alipay、alipaywap、wx、wxwap、qq、qqwap'; $sp77c9d8->config = '{
  "gateway": "http://card.evil5.com",
  "api_id": "your api_id",
  "api_key": "your api_key"
}'; $sp77c9d8->enabled = \App\Pay::ENABLED_ALL; $sp77c9d8->save(); $sp77c9d8 = new \App\Pay(); $sp77c9d8->name = '支付宝'; $sp77c9d8->img = '/plugins/images/ali.png'; $sp77c9d8->driver = 'Alipay'; $sp77c9d8->way = 'Alipay'; $sp77c9d8->comment = '支付宝 - 即时到账套餐(企业)V2'; $sp77c9d8->config = '{
  "partner": "partner",
  "key": "key"
}'; $sp77c9d8->enabled = \App\Pay::ENABLED_PC; $sp77c9d8->save(); $sp77c9d8 = new \App\Pay(); $sp77c9d8->name = '支付宝'; $sp77c9d8->img = '/plugins/images/ali.png'; $sp77c9d8->driver = 'Aliwap'; $sp77c9d8->way = 'Aliwap'; $sp77c9d8->comment = '支付宝 - 高级手机网站支付V4'; $sp77c9d8->config = '{
  "partner": "partner",
  "key": "key"
}'; $sp77c9d8->enabled = \App\Pay::ENABLED_MOBILE; $sp77c9d8->save(); $sp77c9d8 = new \App\Pay(); $sp77c9d8->name = '支付宝扫码'; $sp77c9d8->img = '/plugins/images/ali.png'; $sp77c9d8->driver = 'Aliqr'; $sp77c9d8->way = 'Aliqr'; $sp77c9d8->comment = '支付宝 - 当面付'; $sp77c9d8->config = '{
  "app_id": "app_id",
  "alipay_public_key": "alipay_public_key",
  "merchant_private_key": "merchant_private_key"
}'; $sp77c9d8->enabled = \App\Pay::ENABLED_ALL; $sp77c9d8->save(); $sp77c9d8 = new \App\Pay(); $sp77c9d8->name = '微信扫码'; $sp77c9d8->img = '/plugins/images/wx.png'; $sp77c9d8->driver = 'Wechat'; $sp77c9d8->way = 'NATIVE'; $sp77c9d8->comment = '微信支付 - 扫码'; $sp77c9d8->config = '{
  "APPID": "APPID",
  "MCHID": "商户ID",
  "KEY": "KEY",
  "APPSECRET": "APPSECRET"
}'; $sp77c9d8->enabled = \App\Pay::ENABLED_ALL; $sp77c9d8->save(); $sp77c9d8 = new \App\Pay(); $sp77c9d8->name = '微信H5'; $sp77c9d8->img = '/plugins/images/wx.png'; $sp77c9d8->driver = 'Wechat'; $sp77c9d8->way = 'MWEB'; $sp77c9d8->comment = '微信支付 - H5 (需要开通权限)'; $sp77c9d8->config = '{
  "APPID": "APPID",
  "MCHID": "商户ID",
  "KEY": "KEY",
  "APPSECRET": "APPSECRET"
}'; $sp77c9d8->enabled = \App\Pay::ENABLED_MOBILE; $sp77c9d8->save(); $sp77c9d8 = new \App\Pay(); $sp77c9d8->name = '手机QQ'; $sp77c9d8->img = '/plugins/images/qq.png'; $sp77c9d8->driver = 'QPay'; $sp77c9d8->way = 'NATIVE'; $sp77c9d8->comment = '手机QQ - 扫码'; $sp77c9d8->config = '{
  "mch_id": "mch_id",
  "mch_key": "mch_key"
}'; $sp77c9d8->enabled = \App\Pay::ENABLED_ALL; $sp77c9d8->save(); $sp77c9d8 = new \App\Pay(); $sp77c9d8->name = '支付宝'; $sp77c9d8->img = '/plugins/images/ali.png'; $sp77c9d8->driver = 'Youzan'; $sp77c9d8->way = 'alipay'; $sp77c9d8->comment = '有赞支付 - 支付宝'; $sp77c9d8->config = '{
  "client_id": "client_id",
  "client_secret": "client_secret",
  "kdt_id": "kdt_id"
}'; $sp77c9d8->enabled = \App\Pay::ENABLED_ALL; $sp77c9d8->save(); $sp77c9d8 = new \App\Pay(); $sp77c9d8->name = '微信'; $sp77c9d8->img = '/plugins/images/wx.png'; $sp77c9d8->driver = 'Youzan'; $sp77c9d8->way = 'wechat'; $sp77c9d8->comment = '有赞支付 - 微信'; $sp77c9d8->config = '{
  "client_id": "client_id",
  "client_secret": "client_secret",
  "kdt_id": "kdt_id"
}'; $sp77c9d8->enabled = \App\Pay::ENABLED_ALL; $sp77c9d8->save(); $sp77c9d8 = new \App\Pay(); $sp77c9d8->name = '手机QQ'; $sp77c9d8->img = '/plugins/images/qq.png'; $sp77c9d8->driver = 'Youzan'; $sp77c9d8->way = 'qq'; $sp77c9d8->comment = '有赞支付 - 手机QQ'; $sp77c9d8->config = '{
  "client_id": "client_id",
  "client_secret": "client_secret",
  "kdt_id": "kdt_id"
}'; $sp77c9d8->enabled = \App\Pay::ENABLED_ALL; $sp77c9d8->save(); $sp77c9d8 = new \App\Pay(); $sp77c9d8->name = '支付宝'; $sp77c9d8->img = '/plugins/images/ali.png'; $sp77c9d8->driver = 'CodePay'; $sp77c9d8->way = 'alipay'; $sp77c9d8->comment = '码支付 - 支付宝'; $sp77c9d8->config = '{
  "id": "id",
  "key": "key"
}'; $sp77c9d8->fee_system = 0; $sp77c9d8->enabled = \App\Pay::ENABLED_ALL; $sp77c9d8->save(); $sp77c9d8 = new \App\Pay(); $sp77c9d8->name = '微信'; $sp77c9d8->img = '/plugins/images/wx.png'; $sp77c9d8->driver = 'CodePay'; $sp77c9d8->way = 'weixin'; $sp77c9d8->comment = '码支付 - 微信'; $sp77c9d8->config = '{
  "id": "id",
  "key": "key"
}'; $sp77c9d8->fee_system = 0; $sp77c9d8->enabled = \App\Pay::ENABLED_ALL; $sp77c9d8->save(); $sp77c9d8 = new \App\Pay(); $sp77c9d8->name = '手机QQ'; $sp77c9d8->img = '/plugins/images/qq.png'; $sp77c9d8->driver = 'CodePay'; $sp77c9d8->way = 'qq'; $sp77c9d8->comment = '码支付 - 手机QQ'; $sp77c9d8->config = '{
  "id": "id",
  "key": "key"
}'; $sp77c9d8->fee_system = 0; $sp77c9d8->enabled = \App\Pay::ENABLED_ALL; $sp77c9d8->save(); } public function run() { self::initPay(); } }