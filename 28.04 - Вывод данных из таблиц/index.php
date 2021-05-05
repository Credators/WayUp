<?php

$db = mysqli_connect('localhost', 'root', 'root', 'blog');

if (!$db){
    die("Error connect database");
}

mysqli_query($db, '');

