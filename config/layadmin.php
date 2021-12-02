<?php

/*
 * This file is part of the jiannei/layadmin.
 *
 * (c) jiannei <longjian.huang@foxmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

return [
    'path' => [
        'prefix' => env('ADMIN_PATH_PREFIX', 'admin'), // 视图路由路径前缀，需要与视图配置文件的路径对应

        'home' => env('ADMIN_HOME_PATH', '/'),
    ],

    'title' => env('ADMIN_TITLE', 'LayAdmin'),
    'desc' => env('ADMIN_DESC', '江 城 最 具 影 响 力 的 后 台 系 统 之 一'),

    'log' => [
        'debug' => [
            'channel' => env('ADMIN_LOG_CHANNEL', 'daily'),
        ],
    ],

    // layui 组件配置
    'table' => [
        'parseData' => '(function(res){return {code:res.code,msg:res.message,count:res.data.meta.pagination.total,data:res.data.list}})',
        'response' => [
            'statusName' => 'code',
            'statusCode' => 200,
        ],
        'defaultToolbar' => [
            ['layEvent' => 'refresh', 'icon' => 'layui-icon-refresh'],
            'filter',
            'print',
            'exports',
        ],
        'page' => true,
        'skin' => 'line',
        'even' => true,
    ],

    'select' => [
        'response' => [
            'statusCode' => 200,
            'statusName' => 'code',
            'msgName' => 'message',
            'dataName' => 'data',
        ],
    ],
];
