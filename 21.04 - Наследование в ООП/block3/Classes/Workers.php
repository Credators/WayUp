<?php

/*Метод create должен принимать в качестве аргумента $worker (массив), состоящий из полей name (имя пользователя),
email (адрес электронной почты), age (возраст) и profession (профессия).

Полученный массив он должен добавлять в свойство workers,
заведомо добавив в аргумент $worker поле register_time, в которое нужно занести временную метку, когда пользователь был добавлен в формате
День-Месяц-Год Час:Минуты.
Кроме того, нужно проверять, что все поля в массиве $worker не пустые, в противном случае этот массив
добавлять в свойство workers - не нужно.

Метод all должен возвращать массив с полями workers_count (содержит кол-во воркеров в свойстве workers) и all_workers которое будет
содержать значение свойства workers.

Метод save должен сохранять всех воркеров из свойства workers в TXT файл под названием workers.txt.
*/

class Workers
{
    private static $workers;

    private static function array_push_assoc($array, $key, $value)
    {
        $array[$key] = $value;
        return $array;
    }

    public static function create($worker)
    {
        $arr = self::array_push_assoc($worker, 'register_time', date("Y-m-d H:i:s"));
        foreach ($arr as $item) {
            if ($item === '') {
                echo "Данные не внесены";
                die;
            }
        }
        self::$workers = $arr;
        //print_r(self::$workers);
    }

    public static function all()
    {
        echo "Всего работников "  . count(self::$workers) . "<br / >";
        echo self::$workers;
    }

    public static function save()
    {
        $string = self::$workers;
        file_put_contents("base/workers.txt", $string ,FILE_APPEND);
    }


}




