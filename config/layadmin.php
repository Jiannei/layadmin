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
    // 后台配置
    'path_prefix' => env('ADMIN_PATH_PREFIX', 'admin'), // 视图路由路径前缀，需要与视图配置文件的路径对应

    'title' => env('ADMIN_TITLE', 'LayAdmin'),

    // layui 组件配置
    'table' => [
        'parseData' => [
            'code' => 'code',
            'msg' => 'message',
            'count' => 'data.meta.pagination.total',
            'data' => 'data.list',
        ],
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
