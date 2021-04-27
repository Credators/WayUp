<?php


class Worker
{
    protected static $workers;


    public static function create($worker)
    {
        foreach ($worker as $item) {
            if (empty($item)) {
                die("Внесите все данные!");
            }
        }
        $arr = self::array_push_assoc($worker, 'register_time', date("Y-m-d H:i:s"));
        return self::$workers[] = $arr;
    }
    public static function all()
    {
        echo "Всего пользователей для записи : " . count(self::$workers) . "<br />";
        echo "<pre>";
        print_r(self::$workers);
        echo "</pre>";
    }

    public static function save()
    {
        for ($i = 0; $i < count(self::$workers); $i++){
            $work = "Name : " . self::$workers[$i]['name'] . "\n";
            $work .= "Age : " . self::$workers[$i]['age'] . "\n";
            $work .= "Email : " . self::$workers[$i]['email'] . "\n";
            $work .= "Profession : " . self::$workers[$i]['profession'] . "\n";
            file_put_contents("txt/workers.txt", $work , FILE_APPEND);
        }echo "Данные успешно записаны!";
    }

        private static function array_push_assoc($array, $key, $value) // доп. метод для добавления в ассоц. массивa
    {
        $array[$key] = $value;
        return $array;
    }
}




