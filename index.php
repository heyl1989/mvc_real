<?php
/** 入口文件
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/7
 * Time: 20:39
 */
ini_set("display_errors", "On");
error_reporting(E_ALL);
//导入框架基础类
require './framework/Base.php';
//实例化框架类
$app = new Base();
$app->run();