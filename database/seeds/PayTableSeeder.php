<?php
use Illuminate\Database\Seeder; class PayTableSeeder extends Seeder { private function initPay() { $sp14dff9 = new \App\Pay(); $sp14dff9->name = '支付宝'; $sp14dff9->img = '/plugins/images/ali.png'; $sp14dff9->driver = 'Fakala'; $sp14dff9->way = 'alipay'; $sp14dff9->comment = 'alipay、alipaywap、wx、wxwap、qq、qqwap'; $sp14dff9->config = '{
  "gateway": "http://card.evil5.com",
  "api_id": "your api_id",
  "api_key": "your api_key"
}'; $sp14dff9->enabled = \App\Pay::ENABLED_PC; $sp14dff9->save(); $sp14dff9 = new \App\Pay(); $sp14dff9->name = '支付宝'; $sp14dff9->img = '/plugins/images/ali.png'; $sp14dff9->driver = 'Fakala'; $sp14dff9->way = 'alipaywap'; $sp14dff9->comment = 'alipay、alipaywap、wx、wxwap、qq、qqwap'; $sp14dff9->config = '{
  "gateway": "http://card.evil5.com",
  "api_id": "your api_id",
  "api_key": "your api_key"
}'; $sp14dff9->enabled = \App\Pay::ENABLED_MOBILE; $sp14dff9->save(); $sp14dff9 = new \App\Pay(); $sp14dff9->name = '微信'; $sp14dff9->img = '/plugins/images/wx.png'; $sp14dff9->driver = 'Fakala'; $sp14dff9->way = 'wx'; $sp14dff9->comment = 'alipay、alipaywap、wx、wxwap、qq、qqwap'; $sp14dff9->config = '{
  "gateway": "http://card.evil5.com",
  "api_id": "your api_id",
  "api_key": "your api_key"
}'; $sp14dff9->enabled = \App\Pay::ENABLED_ALL; $sp14dff9->save(); $sp14dff9 = new \App\Pay(); $sp14dff9->name = '支付宝'; $sp14dff9->img = '/plugins/images/ali.png'; $sp14dff9->driver = 'Alipay'; $sp14dff9->way = 'Alipay'; $sp14dff9->comment = '支付宝 - 即时到账套餐(企业)V2'; $sp14dff9->config = '{
  "partner": "partner",
  "key": "key"
}'; $sp14dff9->enabled = \App\Pay::ENABLED_PC; $sp14dff9->save(); $sp14dff9 = new \App\Pay(); $sp14dff9->name = '支付宝'; $sp14dff9->img = '/plugins/images/ali.png'; $sp14dff9->driver = 'Aliwap'; $sp14dff9->way = 'Aliwap'; $sp14dff9->comment = '支付宝 - 高级手机网站支付V4'; $sp14dff9->config = '{
  "partner": "partner",
  "key": "key"
}'; $sp14dff9->enabled = \App\Pay::ENABLED_MOBILE; $sp14dff9->save(); $sp14dff9 = new \App\Pay(); $sp14dff9->name = '支付宝扫码'; $sp14dff9->img = '/plugins/images/ali.png'; $sp14dff9->driver = 'Aliqr'; $sp14dff9->way = 'Aliqr'; $sp14dff9->comment = '支付宝 - 当面付'; $sp14dff9->config = '{
  "app_id": "app_id",
  "alipay_public_key": "alipay_public_key",
  "merchant_private_key": "merchant_private_key"
}'; $sp14dff9->enabled = \App\Pay::ENABLED_ALL; $sp14dff9->save(); $sp14dff9 = new \App\Pay(); $sp14dff9->name = '微信扫码'; $sp14dff9->img = '/plugins/images/wx.png'; $sp14dff9->driver = 'WeChat'; $sp14dff9->way = 'NATIVE'; $sp14dff9->comment = '微信支付 - 扫码'; $sp14dff9->config = '{
  "APPID": "APPID",
  "MCHID": "商户ID",
  "KEY": "KEY",
  "APPSECRET": "APPSECRET"
}'; $sp14dff9->enabled = \App\Pay::ENABLED_ALL; $sp14dff9->save(); $sp14dff9 = new \App\Pay(); $sp14dff9->name = '微信H5'; $sp14dff9->img = '/plugins/images/wx.png'; $sp14dff9->driver = 'WeChat'; $sp14dff9->way = 'MWEB'; $sp14dff9->comment = '微信支付 - H5 (需要开通权限)'; $sp14dff9->config = '{
  "APPID": "APPID",
  "MCHID": "商户ID",
  "KEY": "KEY",
  "APPSECRET": "APPSECRET"
}'; $sp14dff9->enabled = \App\Pay::ENABLED_MOBILE; $sp14dff9->save(); $sp14dff9 = new \App\Pay(); $sp14dff9->name = '手机QQ'; $sp14dff9->img = '/plugins/images/qq.png'; $sp14dff9->driver = 'QPay'; $sp14dff9->way = 'NATIVE'; $sp14dff9->comment = '手机QQ - 扫码'; $sp14dff9->config = '{
  "mch_id": "mch_id",
  "mch_key": "mch_key"
}'; $sp14dff9->enabled = \App\Pay::ENABLED_ALL; $sp14dff9->save(); $sp14dff9 = new \App\Pay(); $sp14dff9->name = '支付宝'; $sp14dff9->img = '/plugins/images/ali.png'; $sp14dff9->driver = 'Youzan'; $sp14dff9->way = 'alipay'; $sp14dff9->comment = '有赞支付 - 支付宝'; $sp14dff9->config = '{
  "client_id": "client_id",
  "client_secret": "client_secret",
  "kdt_id": "kdt_id"
}'; $sp14dff9->enabled = \App\Pay::ENABLED_ALL; $sp14dff9->save(); $sp14dff9 = new \App\Pay(); $sp14dff9->name = '微信'; $sp14dff9->img = '/plugins/images/wx.png'; $sp14dff9->driver = 'Youzan'; $sp14dff9->way = 'wechat'; $sp14dff9->comment = '有赞支付 - 微信'; $sp14dff9->config = '{
  "client_id": "client_id",
  "client_secret": "client_secret",
  "kdt_id": "kdt_id"
}'; $sp14dff9->enabled = \App\Pay::ENABLED_ALL; $sp14dff9->save(); $sp14dff9 = new \App\Pay(); $sp14dff9->name = '手机QQ'; $sp14dff9->img = '/plugins/images/qq.png'; $sp14dff9->driver = 'Youzan'; $sp14dff9->way = 'qq'; $sp14dff9->comment = '有赞支付 - 手机QQ'; $sp14dff9->config = '{
  "client_id": "client_id",
  "client_secret": "client_secret",
  "kdt_id": "kdt_id"
}'; $sp14dff9->enabled = \App\Pay::ENABLED_ALL; $sp14dff9->save(); $sp14dff9 = new \App\Pay(); $sp14dff9->name = '支付宝'; $sp14dff9->img = '/plugins/images/ali.png'; $sp14dff9->driver = 'CodePay'; $sp14dff9->way = 'alipay'; $sp14dff9->comment = '码支付 - 支付宝'; $sp14dff9->config = '{
  "id": "id",
  "key": "key"
}'; $sp14dff9->fee_system = 0; $sp14dff9->enabled = \App\Pay::ENABLED_ALL; $sp14dff9->save(); $sp14dff9 = new \App\Pay(); $sp14dff9->name = '微信'; $sp14dff9->img = '/plugins/images/wx.png'; $sp14dff9->driver = 'CodePay'; $sp14dff9->way = 'weixin'; $sp14dff9->comment = '码支付 - 微信'; $sp14dff9->config = '{
  "id": "id",
  "key": "key"
}'; $sp14dff9->fee_system = 0; $sp14dff9->enabled = \App\Pay::ENABLED_ALL; $sp14dff9->save(); $sp14dff9 = new \App\Pay(); $sp14dff9->name = '手机QQ'; $sp14dff9->img = '/plugins/images/qq.png'; $sp14dff9->driver = 'CodePay'; $sp14dff9->way = 'qq'; $sp14dff9->comment = '码支付 - 手机QQ'; $sp14dff9->config = '{
  "id": "id",
  "key": "key"
}'; $sp14dff9->fee_system = 0; $sp14dff9->enabled = \App\Pay::ENABLED_ALL; $sp14dff9->save(); } public function run() { self::initPay(); } }
