<?php

require_once 'Classes/Workers.php';

$worker = [
    'name' => 'Alexxxx',
    'email' => '1@mail.com',
    'age' => 34,
    'profession' => 'web_developer',
];
print_r(Workers::create($worker));

Workers::save();
Workers::all();