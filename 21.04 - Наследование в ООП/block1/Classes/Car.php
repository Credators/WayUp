<?php

class Car
{
    public $model;
    public $color;
    public $horsepower;
    public $production_year;

    public function __construct($model, $color, $horsepower, $production_year)
    {
        $this->model = $model;
        $this->color = $color;
        $this->horsepower = $horsepower;
        $this->production_year = $production_year;
    }


    public function show(){
        $html = "Модель - $this->model : ";
        $html .= "Цвет - $this->color : ";
        $html .= "Лошадок -  $this->horsepower : ";
        $html .= "Год выпуска $this->production_year ";
        return $html;
    }

    public function save(){
        file_put_contents("$this->model _ $this->production_year .txt", $this->show());
    }

}


