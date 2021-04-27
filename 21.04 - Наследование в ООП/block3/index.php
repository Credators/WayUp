<?php

require_once 'Workers.php';

$worker = [
    'name' => 'Alex',
    'email' => 'al@gmail.com',
    'age' => 34,
    'profession' => 'web_developer',
    'register_time' => date("F j, Y, g:i a")
];
Workers::create($worker);
Workers::save();
print_r(Workers::all());