<?php
/** 应用配置文件，使用数组方式
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/7
 * Time: 20:34
 */

return [
    //数据库的链接参数配置
    'db' => [
        'user' => 'root',//用户名
        'pass' => '******',//密码
        'dbname' => 'edu',//默认数据库
    ],
    //应用的整体配置
    'app' => [
        'default_platform'=>'home',//默认模块
    ],
    //前台配置
    'home' => [
        'default_controller'=>'Student',//默认控制器
        'default_action'=>'listAll',//默认方法
    ],
    //后台配置
    'admin' => [
        'default_controller'=>'',//默认控制器
        'default_action'=>'',//默认方法
    ]
];