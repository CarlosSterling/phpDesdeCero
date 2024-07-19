<?php
$contador = 1;

while($contador <= 20){
    echo $contador."\n";
    if ($contador == 10) {
        break;
    }
    $contador++;
}

$laLiga =["Real Madrid", "Sevilla", "Mallorca", "Getafe"];
foreach($laLiga as $Liga){
    if ($Liga == "Sevilla") {
        continue;
    }
    echo $Liga."\n";
}