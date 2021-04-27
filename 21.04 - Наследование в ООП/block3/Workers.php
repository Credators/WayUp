<?php

/*Метод create должен принимать в качестве аргумента $worker (массив), состоящий из полей name (имя пользователя),
email (адрес электронной почты), age (возраст) и profession (профессия).

Полученный массив он должен добавлять в свойство workers,
заведомо добавив в аргумент $worker поле register_time, в которое нужно занести временную метку, когда пользователь был добавлен в формате
День-Месяц-Год Час:Минуты. Кроме того, нужно проверять, что все поля в массиве $worker не пустые, в противном случае этот массив
добавлять в свойство workers - не нужно.

Метод all должен возвращать массив с полями workers_count (содержит кол-во воркеров в свойстве workers) и all_workers которое будет
содержать значение свойства workers.

Метод save должен сохранять всех воркеров из свойства workers в TXT файл под названием workers.txt.
*/

class Workers
{
    private static $workers;
        //['name', 'email', 'age', 'profession']

    public static function create($worker)
    {
        return self::$workers = [$worker];
    }

    public static function all()
    {
        echo "Всего работников "  . count(self::$workers) . "<br / >";
        return self::$workers;
    }

    public static function save()
    {

    }
}






