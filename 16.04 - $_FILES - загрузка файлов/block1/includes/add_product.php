<?php

//print_r($_POST);
//die;

$form = "Название товара: {$_POST["product"]}\n";
$form .= "Описание: {$_POST["description"]}\n";
$form .= "Категория товара: {$_POST["category"]}\n";
$form .= "Цена: {$_POST["price"]} грн.";

/*$fp = fopen("product.txt", "w+");
fwrite($fp, $form);
fclose($fp);*/

file_put_contents("product.txt", $form);


