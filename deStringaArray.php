<?php

$fecha1 = "2020/29/06";
$fecha2 = "1989-27-04";
$fecha3 = "1992_10_06";
$numero = "uno dos tres cuatro cinco seis siete";

$arrayFecha = explode("/",$fecha1);

echo $arrayFecha[2]."\n";

$arrayNumeros = explode(" ",$numero,2);
echo $arrayNumeros[0]."\n";