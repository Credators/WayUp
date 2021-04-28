<?php

class Worker
{
    protected static $workers = [];

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
        $countWorkers = self::$workers;
        echo "Всего пользователей для записи : " . count($countWorkers) . "<br />";
        echo "<pre>";
        print_r($countWorkers);
        echo "</pre>";
    }

    public static function save()
    {
        for ($i = 0; $i < count(self::$workers); $i++){
            $work = "Name : " . self::$workers[$i]['name'] . "\n";
            $work .= "Age : " . self::$workers[$i]['age'] . "\n";
            $work .= "Email : " . self::$workers[$i]['email'] . "\n";
            $work .= "Profession : " . self::$workers[$i]['profession'] . "\n";
            file_put_contents("workers.txt", $work , FILE_APPEND);
        }echo "Данные успешно записаны в файл!" . '<a href="./workers.txt">открыть ?</a><br>';
    }

        private static function array_push_assoc($arr, $key, $value) // доп. метод для добавления в ассоц. массивa
    {
        $arr[$key] = $value;
        return $arr;
    }
}




