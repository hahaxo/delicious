<?php
require 'vendor/autoload.php';//自动加载 medoo 数据库类
require 'db.php';//数据库配置
require 'function.php';//公共自定义函数
require 'user.class.php';//用户类

User::autoLogin();
