<?php

$app = [];

// 获取配置
$app['config'] = require ROOT . DS . 'config.php';
require 'functions.php';

/*
 * 现在的项目中使用了一堆的require 语句, 用来引进类，这样的方式对项目管理并不是很好，
 * 现在有人为 php 开发了一个叫做 composer 的依赖包管理工具，非常好用，我们将其集成进来
 * 这里我们用Composer自动加载机制
 *
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Router.php';
require 'Request.php';
*/

// 类自动加载方法，其他的文件不会自动引入，如function.php
require __DIR__ . '/..' . '/vendor/autoload.php';

$app['database'] =   new QueryBuilder(
    Connection::make($app['config']['database'])
);
