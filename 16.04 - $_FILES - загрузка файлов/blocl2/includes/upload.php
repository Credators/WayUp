<?php

$type = $_FILES["image"]["type"];
$fileName = $_FILES["image"]["name"];
$tempName = $_FILES["image"]["tmp_name"];

if($type !== "image/jpeg"){
    if($type !== "image/png") {
        echo "Не верный формат картинки";
        die;
    }
}
$path = uniqid() . "_$fileName";
move_uploaded_file($tempName,$path);
echo "Картинка успешно загружена";

