# Dcat Admin Extension


## 定时任务插件

* 任务列表
* 日志列表

## 安装

```
    composer require jyil/crontab-extension
```

## 配置 crontab

    * * * * * php /your web dir/artisan autotask:run >>/home/crontab.log 2>&1

根据以下项目适配dcat admin 2.0

* [dcat-admin-crontab-extension](dcat-admin-crontab-extension)
