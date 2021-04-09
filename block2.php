<?php

$arr = array(2020, 'Ivan', false);

print_r($arr) . '/n';


$arr2 = 
[
    [
        'id'        => 001,
        'name'      => 'Artur',
        'surname'   => 'Yaroslavstsev',
        'age'       => 34,
        'lang'      => 'ru'
    ],
    [
        'id'        => 002,
        'name'      => 'Vasya',
        'surname'   => 'Grinkov',
        'age'       => 24,
        'lang'      => 'ukr'
    ],
    [
        'id'        => 003,
        'name'      => 'Jony',
        'surname'   => 'Galecky',
        'age'       => 48,
        'lang'      => 'en'
    ]
];

print_r($arr2) . '/n';

$arr3 = 
[
    'key' => 101,
    'url' => 'https://google.com',
    'ssl' =>  '-----01102214-----',
    'db'  =>
        [
            'port'  => 3308,
            'host'  => 'google',
            'login' => 'google@gmail.com',
            'psw'   => 123456
        ]
    ];

$arr3['db']['port'] = 3309;

print_r($arr3);

?>



