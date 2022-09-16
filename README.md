# Dcat Admin Extension

[![Latest Stable Version](http://poser.pugx.org/jyil/crontab/v)](https://packagist.org/packages/jyil/crontab)
[![Total Downloads](http://poser.pugx.org/jyil/crontab/downloads)](https://packagist.org/packages/jyil/crontab)
[![License](http://poser.pugx.org/jyil/crontab/license)](https://packagist.org/packages/jyil/crontab)

## 定时任务插件

* 任务列表
* 日志列表

## 安装

```
    composer require jyil/crontab
```

## 配置 crontab

    * * * * * php /your web dir/artisan autotask:run >>/home/crontab.log 2>&1

根据以下项目适配dcat admin 2.0

* [dcat-admin-crontab-extension](https://github.com/ArrowJustDoIt/dcat-admin-crontab-extension)
