<?php
use Illuminate\Database\Seeder; class PayTableSeeder extends Seeder { private function initPay() { $sp8444d3 = new \App\Pay(); $sp8444d3->name = '支付宝'; $sp8444d3->img = '/plugins/images/ali.png'; $sp8444d3->driver = 'Alipay'; $sp8444d3->way = 'Alipay'; $sp8444d3->comment = '支付宝 - 即时到账套餐(企业)V2'; $sp8444d3->config = '{
  "partner": "partner",
  "key": "key"
}'; $sp8444d3->enabled = \App\Pay::ENABLED_PC; $sp8444d3->save(); $sp8444d3 = new \App\Pay(); $sp8444d3->name = '支付宝'; $sp8444d3->img = '/plugins/images/ali.png'; $sp8444d3->driver = 'Aliwap'; $sp8444d3->way = 'Aliwap'; $sp8444d3->comment = '支付宝 - 高级手机网站支付V4'; $sp8444d3->config = '{
  "partner": "partner",
  "key": "key"
}'; $sp8444d3->enabled = \App\Pay::ENABLED_MOBILE; $sp8444d3->save(); $sp8444d3 = new \App\Pay(); $sp8444d3->name = '支付宝扫码'; $sp8444d3->img = '/plugins/images/ali.png'; $sp8444d3->driver = 'Aliqr'; $sp8444d3->way = 'Aliqr'; $sp8444d3->comment = '支付宝 - 当面付'; $sp8444d3->config = '{
  "app_id": "app_id",
  "alipay_public_key": "alipay_public_key",
  "merchant_private_key": "merchant_private_key"
}'; $sp8444d3->enabled = \App\Pay::ENABLED_ALL; $sp8444d3->save(); $sp8444d3 = new \App\Pay(); $sp8444d3->name = '微信扫码'; $sp8444d3->img = '/plugins/images/wx.png'; $sp8444d3->driver = 'Wechat'; $sp8444d3->way = 'NATIVE'; $sp8444d3->comment = '微信支付 - 扫码'; $sp8444d3->config = '{
  "APPID": "APPID",
  "MCHID": "商户ID",
  "KEY": "KEY",
  "APPSECRET": "APPSECRET"
}'; $sp8444d3->enabled = \App\Pay::ENABLED_ALL; $sp8444d3->save(); $sp8444d3 = new \App\Pay(); $sp8444d3->name = '微信H5'; $sp8444d3->img = '/plugins/images/wx.png'; $sp8444d3->driver = 'Wechat'; $sp8444d3->way = 'MWEB'; $sp8444d3->comment = '微信支付 - H5 (需要开通权限)'; $sp8444d3->config = '{
  "APPID": "APPID",
  "MCHID": "商户ID",
  "KEY": "KEY",
  "APPSECRET": "APPSECRET"
}'; $sp8444d3->enabled = \App\Pay::ENABLED_MOBILE; $sp8444d3->save(); $sp8444d3 = new \App\Pay(); $sp8444d3->name = '手机QQ'; $sp8444d3->img = '/plugins/images/qq.png'; $sp8444d3->driver = 'QPay'; $sp8444d3->way = 'NATIVE'; $sp8444d3->comment = '手机QQ - 扫码'; $sp8444d3->config = '{
  "mch_id": "mch_id",
  "mch_key": "mch_key"
}'; $sp8444d3->enabled = \App\Pay::ENABLED_ALL; $sp8444d3->save(); $sp8444d3 = new \App\Pay(); $sp8444d3->name = '支付宝'; $sp8444d3->img = '/plugins/images/ali.png'; $sp8444d3->driver = 'Youzan'; $sp8444d3->way = 'alipay'; $sp8444d3->comment = '有赞支付 - 支付宝'; $sp8444d3->config = '{
  "client_id": "client_id",
  "client_secret": "client_secret",
  "kdt_id": "kdt_id"
}'; $sp8444d3->enabled = \App\Pay::ENABLED_ALL; $sp8444d3->save(); $sp8444d3 = new \App\Pay(); $sp8444d3->name = '微信'; $sp8444d3->img = '/plugins/images/wx.png'; $sp8444d3->driver = 'Youzan'; $sp8444d3->way = 'wechat'; $sp8444d3->comment = '有赞支付 - 微信'; $sp8444d3->config = '{
  "client_id": "client_id",
  "client_secret": "client_secret",
  "kdt_id": "kdt_id"
}'; $sp8444d3->enabled = \App\Pay::ENABLED_ALL; $sp8444d3->save(); $sp8444d3 = new \App\Pay(); $sp8444d3->name = '手机QQ'; $sp8444d3->img = '/plugins/images/qq.png'; $sp8444d3->driver = 'Youzan'; $sp8444d3->way = 'qq'; $sp8444d3->comment = '有赞支付 - 手机QQ'; $sp8444d3->config = '{
  "client_id": "client_id",
  "client_secret": "client_secret",
  "kdt_id": "kdt_id"
}'; $sp8444d3->enabled = \App\Pay::ENABLED_ALL; $sp8444d3->save(); $sp8444d3 = new \App\Pay(); $sp8444d3->name = '支付宝'; $sp8444d3->img = '/plugins/images/ali.png'; $sp8444d3->driver = 'CodePay'; $sp8444d3->way = 'alipay'; $sp8444d3->comment = '码支付 - 支付宝'; $sp8444d3->config = '{
  "id": "id",
  "key": "key"
}'; $sp8444d3->fee_system = 0; $sp8444d3->enabled = \App\Pay::ENABLED_ALL; $sp8444d3->save(); $sp8444d3 = new \App\Pay(); $sp8444d3->name = '微信'; $sp8444d3->img = '/plugins/images/wx.png'; $sp8444d3->driver = 'CodePay'; $sp8444d3->way = 'weixin'; $sp8444d3->comment = '码支付 - 微信'; $sp8444d3->config = '{
  "id": "id",
  "key": "key"
}'; $sp8444d3->fee_system = 0; $sp8444d3->enabled = \App\Pay::ENABLED_ALL; $sp8444d3->save(); $sp8444d3 = new \App\Pay(); $sp8444d3->name = '手机QQ'; $sp8444d3->img = '/plugins/images/qq.png'; $sp8444d3->driver = 'CodePay'; $sp8444d3->way = 'qq'; $sp8444d3->comment = '码支付 - 手机QQ'; $sp8444d3->config = '{
  "id": "id",
  "key": "key"
}'; $sp8444d3->fee_system = 0; $sp8444d3->enabled = \App\Pay::ENABLED_ALL; $sp8444d3->save(); } public function run() { self::initPay(); } }