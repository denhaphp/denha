<?php
return [
    // +----------------------------------------------------------------------
    // | 数据库信息
    // +----------------------------------------------------------------------
    'config' => [
        [
            'type'             => 'mysql', // 数据库类型
            'host'             => '127.0.0.1', // 服务器地址
            'name'             => 'dbname', // 数据库名
            'user'             => 'dbroot', // 用户名
            'pwd'              => 'dbpassword', // 密
            'prefix'           => 'dh_', // 数据库表前缀
            'port'             => '3309', // 端口
            'dsn'              => '',
            'params'           => '',
            'charset'          => 'utf8mb4',
            'read_write_power' => 0, // 读写权限 0读写 1只写 2只读
            'error_log'        => true, // 是否开启错误Sql保存
            'slow_log'         => true, // 是否开启慢sql日志记录
            'slow_time'        => 5, // 查询时间超过多少秒记录日志
            'sql_explain'      => true, // 开启sql性能查询
        ],
    ],
];
