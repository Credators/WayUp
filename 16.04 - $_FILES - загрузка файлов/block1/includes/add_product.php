<?php

$form = "Название товара: {$_POST["product"]}\n";
$form .= "Описание: {$_POST["description"]}\n";
$form .= "Категория товара: {$_POST["category"]}\n";
$form .= "Цена: {$_POST["price"]} грн.";

$product = "products.txt";

$fp = fopen($product, "w");
fwrite($fp, $form);
fclose($fp);