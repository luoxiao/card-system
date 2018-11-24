<?php
use Illuminate\Database\Seeder; class PayTableSeeder extends Seeder { private function initPay() { $sp80d3a4 = new \App\Pay(); $sp80d3a4->name = '支付宝'; $sp80d3a4->img = '/plugins/images/ali.png'; $sp80d3a4->driver = 'Fakala'; $sp80d3a4->way = 'alipay'; $sp80d3a4->comment = 'alipay、alipaywap、wx、wxwap、qq、qqwap'; $sp80d3a4->config = '{
  "gateway": "http://card.evil5.com",
  "api_id": "your api_id",
  "api_key": "your api_key"
}'; $sp80d3a4->enabled = \App\Pay::ENABLED_PC; $sp80d3a4->save(); $sp80d3a4 = new \App\Pay(); $sp80d3a4->name = '支付宝'; $sp80d3a4->img = '/plugins/images/ali.png'; $sp80d3a4->driver = 'Fakala'; $sp80d3a4->way = 'alipaywap'; $sp80d3a4->comment = 'alipay、alipaywap、wx、wxwap、qq、qqwap'; $sp80d3a4->config = '{
  "gateway": "http://card.evil5.com",
  "api_id": "your api_id",
  "api_key": "your api_key"
}'; $sp80d3a4->enabled = \App\Pay::ENABLED_MOBILE; $sp80d3a4->save(); $sp80d3a4 = new \App\Pay(); $sp80d3a4->name = '微信'; $sp80d3a4->img = '/plugins/images/wx.png'; $sp80d3a4->driver = 'Fakala'; $sp80d3a4->way = 'wx'; $sp80d3a4->comment = 'alipay、alipaywap、wx、wxwap、qq、qqwap'; $sp80d3a4->config = '{
  "gateway": "http://card.evil5.com",
  "api_id": "your api_id",
  "api_key": "your api_key"
}'; $sp80d3a4->enabled = \App\Pay::ENABLED_ALL; $sp80d3a4->save(); $sp80d3a4 = new \App\Pay(); $sp80d3a4->name = '支付宝'; $sp80d3a4->img = '/plugins/images/ali.png'; $sp80d3a4->driver = 'Alipay'; $sp80d3a4->way = 'Alipay'; $sp80d3a4->comment = '支付宝 - 即时到账套餐(企业)V2'; $sp80d3a4->config = '{
  "partner": "partner",
  "key": "key"
}'; $sp80d3a4->enabled = \App\Pay::ENABLED_PC; $sp80d3a4->save(); $sp80d3a4 = new \App\Pay(); $sp80d3a4->name = '支付宝'; $sp80d3a4->img = '/plugins/images/ali.png'; $sp80d3a4->driver = 'Aliwap'; $sp80d3a4->way = 'Aliwap'; $sp80d3a4->comment = '支付宝 - 高级手机网站支付V4'; $sp80d3a4->config = '{
  "partner": "partner",
  "key": "key"
}'; $sp80d3a4->enabled = \App\Pay::ENABLED_MOBILE; $sp80d3a4->save(); $sp80d3a4 = new \App\Pay(); $sp80d3a4->name = '支付宝扫码'; $sp80d3a4->img = '/plugins/images/ali.png'; $sp80d3a4->driver = 'Aliqr'; $sp80d3a4->way = 'Aliqr'; $sp80d3a4->comment = '支付宝 - 当面付'; $sp80d3a4->config = '{
  "app_id": "app_id",
  "alipay_public_key": "alipay_public_key",
  "merchant_private_key": "merchant_private_key"
}'; $sp80d3a4->enabled = \App\Pay::ENABLED_ALL; $sp80d3a4->save(); $sp80d3a4 = new \App\Pay(); $sp80d3a4->name = '微信扫码'; $sp80d3a4->img = '/plugins/images/wx.png'; $sp80d3a4->driver = 'Wechat'; $sp80d3a4->way = 'NATIVE'; $sp80d3a4->comment = '微信支付 - 扫码'; $sp80d3a4->config = '{
  "APPID": "APPID",
  "MCHID": "商户ID",
  "KEY": "KEY",
  "APPSECRET": "APPSECRET"
}'; $sp80d3a4->enabled = \App\Pay::ENABLED_ALL; $sp80d3a4->save(); $sp80d3a4 = new \App\Pay(); $sp80d3a4->name = '微信H5'; $sp80d3a4->img = '/plugins/images/wx.png'; $sp80d3a4->driver = 'Wechat'; $sp80d3a4->way = 'MWEB'; $sp80d3a4->comment = '微信支付 - H5 (需要开通权限)'; $sp80d3a4->config = '{
  "APPID": "APPID",
  "MCHID": "商户ID",
  "KEY": "KEY",
  "APPSECRET": "APPSECRET"
}'; $sp80d3a4->enabled = \App\Pay::ENABLED_MOBILE; $sp80d3a4->save(); $sp80d3a4 = new \App\Pay(); $sp80d3a4->name = '手机QQ'; $sp80d3a4->img = '/plugins/images/qq.png'; $sp80d3a4->driver = 'QPay'; $sp80d3a4->way = 'NATIVE'; $sp80d3a4->comment = '手机QQ - 扫码'; $sp80d3a4->config = '{
  "mch_id": "mch_id",
  "mch_key": "mch_key"
}'; $sp80d3a4->enabled = \App\Pay::ENABLED_ALL; $sp80d3a4->save(); $sp80d3a4 = new \App\Pay(); $sp80d3a4->name = '支付宝'; $sp80d3a4->img = '/plugins/images/ali.png'; $sp80d3a4->driver = 'Youzan'; $sp80d3a4->way = 'alipay'; $sp80d3a4->comment = '有赞支付 - 支付宝'; $sp80d3a4->config = '{
  "client_id": "client_id",
  "client_secret": "client_secret",
  "kdt_id": "kdt_id"
}'; $sp80d3a4->enabled = \App\Pay::ENABLED_ALL; $sp80d3a4->save(); $sp80d3a4 = new \App\Pay(); $sp80d3a4->name = '微信'; $sp80d3a4->img = '/plugins/images/wx.png'; $sp80d3a4->driver = 'Youzan'; $sp80d3a4->way = 'wechat'; $sp80d3a4->comment = '有赞支付 - 微信'; $sp80d3a4->config = '{
  "client_id": "client_id",
  "client_secret": "client_secret",
  "kdt_id": "kdt_id"
}'; $sp80d3a4->enabled = \App\Pay::ENABLED_ALL; $sp80d3a4->save(); $sp80d3a4 = new \App\Pay(); $sp80d3a4->name = '手机QQ'; $sp80d3a4->img = '/plugins/images/qq.png'; $sp80d3a4->driver = 'Youzan'; $sp80d3a4->way = 'qq'; $sp80d3a4->comment = '有赞支付 - 手机QQ'; $sp80d3a4->config = '{
  "client_id": "client_id",
  "client_secret": "client_secret",
  "kdt_id": "kdt_id"
}'; $sp80d3a4->enabled = \App\Pay::ENABLED_ALL; $sp80d3a4->save(); $sp80d3a4 = new \App\Pay(); $sp80d3a4->name = '支付宝'; $sp80d3a4->img = '/plugins/images/ali.png'; $sp80d3a4->driver = 'CodePay'; $sp80d3a4->way = 'alipay'; $sp80d3a4->comment = '码支付 - 支付宝'; $sp80d3a4->config = '{
  "id": "id",
  "key": "key"
}'; $sp80d3a4->fee_system = 0; $sp80d3a4->enabled = \App\Pay::ENABLED_ALL; $sp80d3a4->save(); $sp80d3a4 = new \App\Pay(); $sp80d3a4->name = '微信'; $sp80d3a4->img = '/plugins/images/wx.png'; $sp80d3a4->driver = 'CodePay'; $sp80d3a4->way = 'weixin'; $sp80d3a4->comment = '码支付 - 微信'; $sp80d3a4->config = '{
  "id": "id",
  "key": "key"
}'; $sp80d3a4->fee_system = 0; $sp80d3a4->enabled = \App\Pay::ENABLED_ALL; $sp80d3a4->save(); $sp80d3a4 = new \App\Pay(); $sp80d3a4->name = '手机QQ'; $sp80d3a4->img = '/plugins/images/qq.png'; $sp80d3a4->driver = 'CodePay'; $sp80d3a4->way = 'qq'; $sp80d3a4->comment = '码支付 - 手机QQ'; $sp80d3a4->config = '{
  "id": "id",
  "key": "key"
}'; $sp80d3a4->fee_system = 0; $sp80d3a4->enabled = \App\Pay::ENABLED_ALL; $sp80d3a4->save(); } public function run() { self::initPay(); } }