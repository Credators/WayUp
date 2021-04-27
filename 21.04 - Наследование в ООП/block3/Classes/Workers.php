<?php


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
        echo "Всего работников "  . count(self::$workers) . "\n";
        echo file_get_contents("base/workers.txt", true);

    }

    public static function save()
    {
            foreach (self::$workers as $value) {
                    $add = "Name : {$value['name']} \n";
                    $add .= "Age : {$value['age']} \n";
                    $add .= "Email : {$value['email']} \n";
                    $add .= "Profession : {$value['profession']} \n";
                }
        file_put_contents("base/workers.txt", $add,FILE_APPEND);
    }
}




