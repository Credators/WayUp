<?php
/*Переберите и выведите данный массив на страницу в виде готового HTML (также можно использовать стили)
с помощью циклов for, while и foreach*/

$todos = [
    [
        "id" => 1,
        "title" => "Купить столовые приборы",
        "date" => "03.04.2020",
        "status" => "Выполнено"
    ],
    [
        "id" => 2,
        "title" => "Выбросить мусор",
        "date" => "05.04.2020",
        "status" => "Ожидается"
    ],
    [
        "id" => 3,
        "title" => "Помыть машину",
        "date" => "10.04.2020",
        "status" => "Ожидается"
    ]
];

$html = "<table border='1'><th>Номер</th><th>Наименование</th><th>Дата</th><th>Статус</th>";

$html .= "<tr><td colspan='4'>Ниже задача выполнена в Foreach</td></tr>";

foreach ($todos as $item){
        $html .= "<tr><td>{$item["id"]}</td>";
        $html .= "<td>{$item["title"]}</td>";
        $html .= "<td>{$item["date"]}</td>";
        $html .= "<td>{$item["status"]}</td></tr>";
    }

$html .= "<tr><td colspan='4'>Ниже задача выполнена в цикле For</td></tr>";

for ($i = 0 ; $i < count($todos); $i++){
        $html .= "<tr><td>{$todos[$i]["id"]}</td>";
        $html .= "<td>{$todos[$i]["title"]}</td>";
        $html .= "<td>{$todos[$i]["date"]}</td>";
        $html .= "<td>{$todos[$i]["status"]}</td></tr>";
}

$html .= "<tr><td colspan='4'>Ниже задача выполнена в цикле While</td></tr>";

$i = 0;
while ($i < count($todos)){
        $html .= "<tr><td>{$todos[$i]["id"]}</td>";
        $html .= "<td>{$todos[$i]["title"]}</td>";
        $html .= "<td>{$todos[$i]["date"]}</td>";
        $html .= "<td>{$todos[$i]["status"]}</td></tr>";
        $i++;
};

$html .= "</table>";

echo $html;