<?php

require_once 'Classes/Worker.php';
require_once '../block4/Finder.php';

$worker = [
    'name' => 'Oleg',
    'email' => '2@mail.com',
    'age' => 21,
    'profession' => 'php_developer',
];

$worker1 = [
    'name' => 'Saha',
    'email' => '3@mail.com',
    'age' => 22,
    'profession' => 'php_developer',
];

Worker::create($worker);
Worker::create($worker1);
//Worker::all();
//Worker::save();

Finder::find($worker['email']);
