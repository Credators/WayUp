<?php

$type = $_FILES["image"]["type"];

if($type !== "image/jpeg"){
    if($type !== "image/png") {
        echo "Не верный формат картинки";
        die;
    }
}
$path = "includes" . time() . "_" . $_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"],$path);
echo "Картинка успешно загружена";

