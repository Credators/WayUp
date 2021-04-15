<?php

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

$html = "<table border='1'><th>№</th><th>Описание</th><th>Дата</th><th>Статус</th>";

$html .= "<tr><td colspan='4'><i>Ниже задача выполнена в Foreach</i></td></tr>";

foreach ($todos as $item){
    $html .= "<tr>";
        foreach ($item as $cell){
            $html .="<td>{$cell}</td>";
        }
        $html .= "</tr>";
    }

$html .= "<tr><td colspan='4'><i>Ниже задача выполнена в цикле For</i></td></tr>";

for ($i = 0 ; $i < count($todos); $i++){
        $html .= "<tr><td>{$todos[$i]["id"]}</td>";
        $html .= "<td>{$todos[$i]["title"]}</td>";
        $html .= "<td>{$todos[$i]["date"]}</td>";
        $html .= "<td>{$todos[$i]["status"]}</td></tr>";
}

$html .= "<tr><td colspan='4'><i>Ниже задача выполнена в цикле While</i></td></tr>";

$i = 0;
while ($i < count($todos)){
        $html .= "<tr><td>{$todos[$i]["id"]}</td>";
        $html .= "<td>{$todos[$i]["title"]}</td>";
        $html .= "<td>{$todos[$i]["date"]}</td>";
        $html .= "<td>{$todos[$i]["status"]}</td></tr>";
        $i++;
}

$html .= "</table>";

echo $html;