<?php

$aprrendices =[
    ["codigo" => "A0001", "Aprendiz" => "Yulian"],
    ["codigo" => "A0002", "Aprendiz" => "Yanira"],
    ["codigo" => "A0003", "Aprendiz" => "Alejandro"],
    ["codigo" => "A0004", "Aprendiz" => "Xiomara"]

];

foreach ($aprrendices as $aprendiz) {
    echo $aprendiz["codigo"]." - ".$aprendiz["Aprendiz"]."\n";
}