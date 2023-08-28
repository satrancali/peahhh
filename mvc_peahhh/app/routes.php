<?php

return [
    '/user' => [
        'GET' => 'UserController@index',
    ],
    '/qq' => [
        'GET' => 'BenimController@index',
    ],
    '/deneme' => [
        'GET' => 'DenemeController@index',
        'POST' => 'DenemeController@store',
    ],
];
