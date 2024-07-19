<?php

/* dos sintaxis

foreach ($array as $valor){
$valor tendrà cada iteracxiòn
un valor del array
}

2da

foreach ($array as $clave => $valor){
$calve tendrá en cada iteración una clave del array

$valor tendrá en cada iteración un valor del array
}*/

//aray escalar, solo tiene valores
$equipos =["Real Madrid", "Atl Madrid", "Getafe", "Rayo Vallecano", "Leganes"];

//Array asociativo, tiene clave y valor
$laLiga = [

    "Campeon" => "Real Madrid",
    "Subcampeon" => "Atl Madrid",
    "Tercero" => "Getafe",
    "Cuarto" => "Rayo Vallecano",
    "Quinto" =>"Leganes"
];

foreach ($equipos as $clave => $valor) {
    echo "En la posiciòn ".$clave." se encunetra el ".$valor . "\n";

}

foreach ($laLiga as $clave => $valor) {
    echo $clave.": ".$valor."\n";

}

//aray multidimensional

