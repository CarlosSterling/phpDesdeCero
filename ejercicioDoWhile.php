<?php

$numero = intval(readline("Ingrese el numero a multiplicar: "));
$contador =1;

do{
   echo $numero. " X ".$contador. " = ".$numero * $contador."\n";
   $contador++;
}while($contador <=12);