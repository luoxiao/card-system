

### 升级:
 - 备份旧版代码
```
tar -zcvf card_dist.tar.gz /www/wwwroot/card_dist
```
 - download 源代码 -> card_release
```
mkdir tmp_card_update #新建一个文件夹
cd tmp_card_update #新建一个文件夹
wget -O card_release.tar.gz http://183.2.247.158:81/card/card_release.tar.gz
tar -zxvf card_release.tar.gz
```
 - 覆盖新版
```
\cp -rf card_dist/. /www/wwwroot/card_dist
cd ..  #删除新建的文件夹
rm -rf tmp_card_update #删除新建的文件夹
```
 - 进入card_dist目录, 修改目录权限 <br>
```
cd /www/wwwroot/card_dist
chmod -R 777 storage/
chmod -R 777 bootstrap/cache/
chmod -R 777 app/Library/Pay/Aliqr/f2fpay/log/ #if using Aliqr
chmod -R 777 app/Library/Pay/Wechat/logs/ #if using Wechat
cd ~
```

### 安装:

 - download 源代码 -> card_dist <br>


 - 进入card_dist目录, 修改目录权限 <br>
```
chmod -R 777 storage/
chmod -R 777 bootstrap/cache/
chmod -R 777 app/Library/Pay/Aliqr/f2fpay/log/ #if using Aliqr
chmod -R 777 app/Library/Pay/Wechat/logs/ #if using Wechat
```


 - 修改配置信息 <br>
 `cp .env.example .env`

 - 修改后缓存配置信息 <br>
 `php artisan config:cache`

 - 导入数据库 <br>
 ```
 php artisan migrate:fresh
 php artisan db:seed
 ```

 - 系统队列 (邮件等) 这个要在后台一直运行 <br>
    - 数据库 (QUEUE_DRIVER=database) <br>
    - Redis (QUEUE_DRIVER=redis) <br>
    `php artisan queue:work >> /dev/null 2>&1  & echo 'queue ok';`

 - 添加系统定时任务(每日自动结算等) (Linux Cron) <br>
 ```
 * * * * * php /www/wwwroot/card_dist/artisan schedule:run >> /dev/null 2>&1  & echo 'card_job';
 ```

 - 重置任意用户密码 <br>
 `php artisan reset:password {email} {password}`
