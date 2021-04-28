<?php

require_once "../block3/Classes/Worker.php";

class Finder extends Worker
{
    public static function find($email)
    {
        foreach (self::$workers as $value) {
            if(in_array($email, $value, true)) {
                print_r($value);
            }else echo "введи правильный запрос";
        }
    }
}
