<?php

require_once 'Classes/Worker.php';
require_once 'Classes/Finder.php';

$worker = [
    'name' => '',
    'email' => '2@mail.com',
    'age' => 21,
    'profession' => 'php_developer',
];

$worker1 = [
    'name' => 'Sasha',
    'email' => '3@mail.com',
    'age' => 22,
    'profession' => 'php_developer',
];

Worker::create($worker);
Worker::create($worker1);
Worker::all();
Worker::save();

Finder::find("2@mail.com");


