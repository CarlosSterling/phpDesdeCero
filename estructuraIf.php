<?php

//Sintaxis 1 maàs utilizada
$nombre = "Carlos";

if($nombre === "Carlos"){
    echo "Hola ".$nombre."\n";
}

//Sintaxis 2, utilizada para trabajar con còdigo embebido

$apellido = "Sterling";

if($apellido == "Sterling"):
    echo " tu apellido es: ".$apellido;
endif;