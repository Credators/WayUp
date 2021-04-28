<?php

require_once "../block3/Classes/Worker.php";

class Finder extends Worker
{
    public static function find($email)
    {
        foreach (self::$workers as $value) {
            if(in_array($email, $value, true)) {
                echo "<pre>";
                print_r($value);
                echo "</pre>";
            }
        }
    }
}
