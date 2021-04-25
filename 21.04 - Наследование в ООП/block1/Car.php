<?php

class Car
{
    public $model = "BMW";
    public $color = "Green";
    public $horsepower = 220;
    public $production_year = 2000;

    public function show(){
        $html = "Модель - $this->model : ";
        $html .= "Цвет - $this->color : ";
        $html .= "Лошадок -  $this->horsepower : ";
        $html .= "Год выпуска $this->production_year ";
        return $html;
    }

    public function save(){
        file_put_contents("reports/$this->model _ $this->production_year .txt", $this->show());
    }

}

$car = new Car();
echo $car->show();
$car->save();

