<?php
//Se tiene en cuenta el tipo de dato (identidad ===) a diferencia del switch que es igualdad (==).

$edad = intval(readline("Ingrese su edad: "));

$resultado = match (true){

    $edad >= 60 => "Eres de la tercera edad",
    $edad >= 30 => "Eres adulto",
    $edad >= 18 => "Eres un adulto joven",
    default => "Eres un niño"
};

echo $resultado;