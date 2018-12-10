<?php
use Illuminate\Database\Seeder; class PayTableSeeder extends Seeder { private function initPay() { $sp24c25b = new \App\Pay(); $sp24c25b->name = '支付宝'; $sp24c25b->img = '/plugins/images/ali.png'; $sp24c25b->driver = 'Fakala'; $sp24c25b->way = 'alipay'; $sp24c25b->comment = 'alipay、alipaywap、wx、wxwap、qq、qqwap'; $sp24c25b->config = '{
  "gateway": "http://card.evil5.com",
  "api_id": "your api_id",
  "api_key": "your api_key"
}'; $sp24c25b->enabled = \App\Pay::ENABLED_PC; $sp24c25b->save(); $sp24c25b = new \App\Pay(); $sp24c25b->name = '支付宝'; $sp24c25b->img = '/plugins/images/ali.png'; $sp24c25b->driver = 'Fakala'; $sp24c25b->way = 'alipaywap'; $sp24c25b->comment = 'alipay、alipaywap、wx、wxwap、qq、qqwap'; $sp24c25b->config = '{
  "gateway": "http://card.evil5.com",
  "api_id": "your api_id",
  "api_key": "your api_key"
}'; $sp24c25b->enabled = \App\Pay::ENABLED_MOBILE; $sp24c25b->save(); $sp24c25b = new \App\Pay(); $sp24c25b->name = '微信'; $sp24c25b->img = '/plugins/images/wx.png'; $sp24c25b->driver = 'Fakala'; $sp24c25b->way = 'wx'; $sp24c25b->comment = 'alipay、alipaywap、wx、wxwap、qq、qqwap'; $sp24c25b->config = '{
  "gateway": "http://card.evil5.com",
  "api_id": "your api_id",
  "api_key": "your api_key"
}'; $sp24c25b->enabled = \App\Pay::ENABLED_ALL; $sp24c25b->save(); $sp24c25b = new \App\Pay(); $sp24c25b->name = '支付宝'; $sp24c25b->img = '/plugins/images/ali.png'; $sp24c25b->driver = 'Alipay'; $sp24c25b->way = 'Alipay'; $sp24c25b->comment = '支付宝 - 即时到账套餐(企业)V2'; $sp24c25b->config = '{
  "partner": "partner",
  "key": "key"
}'; $sp24c25b->enabled = \App\Pay::ENABLED_PC; $sp24c25b->save(); $sp24c25b = new \App\Pay(); $sp24c25b->name = '支付宝'; $sp24c25b->img = '/plugins/images/ali.png'; $sp24c25b->driver = 'Aliwap'; $sp24c25b->way = 'Aliwap'; $sp24c25b->comment = '支付宝 - 高级手机网站支付V4'; $sp24c25b->config = '{
  "partner": "partner",
  "key": "key"
}'; $sp24c25b->enabled = \App\Pay::ENABLED_MOBILE; $sp24c25b->save(); $sp24c25b = new \App\Pay(); $sp24c25b->name = '支付宝扫码'; $sp24c25b->img = '/plugins/images/ali.png'; $sp24c25b->driver = 'Aliqr'; $sp24c25b->way = 'Aliqr'; $sp24c25b->comment = '支付宝 - 当面付'; $sp24c25b->config = '{
  "app_id": "app_id",
  "alipay_public_key": "alipay_public_key",
  "merchant_private_key": "merchant_private_key"
}'; $sp24c25b->enabled = \App\Pay::ENABLED_ALL; $sp24c25b->save(); $sp24c25b = new \App\Pay(); $sp24c25b->name = '微信扫码'; $sp24c25b->img = '/plugins/images/wx.png'; $sp24c25b->driver = 'WeChat'; $sp24c25b->way = 'NATIVE'; $sp24c25b->comment = '微信支付 - 扫码'; $sp24c25b->config = '{
  "APPID": "APPID",
  "APPSECRET": "APPSECRET",
  "MCHID": "商户ID",
  "KEY": "KEY"
}'; $sp24c25b->enabled = \App\Pay::ENABLED_ALL; $sp24c25b->save(); $sp24c25b = new \App\Pay(); $sp24c25b->name = '微信H5'; $sp24c25b->img = '/plugins/images/wx.png'; $sp24c25b->driver = 'WeChat'; $sp24c25b->way = 'MWEB'; $sp24c25b->comment = '微信支付 - H5 (需要开通权限)'; $sp24c25b->config = '{
  "APPID": "APPID",
  "APPSECRET": "APPSECRET",
  "MCHID": "商户ID",
  "KEY": "KEY"
}'; $sp24c25b->enabled = \App\Pay::ENABLED_MOBILE; $sp24c25b->save(); $sp24c25b = new \App\Pay(); $sp24c25b->name = '手机QQ'; $sp24c25b->img = '/plugins/images/qq.png'; $sp24c25b->driver = 'QPay'; $sp24c25b->way = 'NATIVE'; $sp24c25b->comment = '手机QQ - 扫码'; $sp24c25b->config = '{
  "mch_id": "mch_id",
  "mch_key": "mch_key"
}'; $sp24c25b->enabled = \App\Pay::ENABLED_ALL; $sp24c25b->save(); $sp24c25b = new \App\Pay(); $sp24c25b->name = '支付宝'; $sp24c25b->img = '/plugins/images/ali.png'; $sp24c25b->driver = 'Youzan'; $sp24c25b->way = 'alipay'; $sp24c25b->comment = '有赞支付 - 支付宝'; $sp24c25b->config = '{
  "client_id": "client_id",
  "client_secret": "client_secret",
  "kdt_id": "kdt_id"
}'; $sp24c25b->enabled = \App\Pay::ENABLED_ALL; $sp24c25b->save(); $sp24c25b = new \App\Pay(); $sp24c25b->name = '微信'; $sp24c25b->img = '/plugins/images/wx.png'; $sp24c25b->driver = 'Youzan'; $sp24c25b->way = 'wechat'; $sp24c25b->comment = '有赞支付 - 微信'; $sp24c25b->config = '{
  "client_id": "client_id",
  "client_secret": "client_secret",
  "kdt_id": "kdt_id"
}'; $sp24c25b->enabled = \App\Pay::ENABLED_ALL; $sp24c25b->save(); $sp24c25b = new \App\Pay(); $sp24c25b->name = '手机QQ'; $sp24c25b->img = '/plugins/images/qq.png'; $sp24c25b->driver = 'Youzan'; $sp24c25b->way = 'qq'; $sp24c25b->comment = '有赞支付 - 手机QQ'; $sp24c25b->config = '{
  "client_id": "client_id",
  "client_secret": "client_secret",
  "kdt_id": "kdt_id"
}'; $sp24c25b->enabled = \App\Pay::ENABLED_ALL; $sp24c25b->save(); $sp24c25b = new \App\Pay(); $sp24c25b->name = '支付宝'; $sp24c25b->img = '/plugins/images/ali.png'; $sp24c25b->driver = 'CodePay'; $sp24c25b->way = 'alipay'; $sp24c25b->comment = '码支付 - 支付宝'; $sp24c25b->config = '{
  "id": "id",
  "key": "key"
}'; $sp24c25b->fee_system = 0; $sp24c25b->enabled = \App\Pay::ENABLED_ALL; $sp24c25b->save(); $sp24c25b = new \App\Pay(); $sp24c25b->name = '微信'; $sp24c25b->img = '/plugins/images/wx.png'; $sp24c25b->driver = 'CodePay'; $sp24c25b->way = 'weixin'; $sp24c25b->comment = '码支付 - 微信'; $sp24c25b->config = '{
  "id": "id",
  "key": "key"
}'; $sp24c25b->fee_system = 0; $sp24c25b->enabled = \App\Pay::ENABLED_ALL; $sp24c25b->save(); $sp24c25b = new \App\Pay(); $sp24c25b->name = '手机QQ'; $sp24c25b->img = '/plugins/images/qq.png'; $sp24c25b->driver = 'CodePay'; $sp24c25b->way = 'qq'; $sp24c25b->comment = '码支付 - 手机QQ'; $sp24c25b->config = '{
  "id": "id",
  "key": "key"
}'; $sp24c25b->fee_system = 0; $sp24c25b->enabled = \App\Pay::ENABLED_ALL; $sp24c25b->save(); } public function run() { self::initPay(); } }