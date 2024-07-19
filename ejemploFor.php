<?php

$numero = intval(readline("Ingrese el numero a multiplicar: "));

for ($contador = 1; $contador <= 12; $contador++) {
    echo $numero. " X ".$contador. " = ".$contador * $numero."\n";

}
