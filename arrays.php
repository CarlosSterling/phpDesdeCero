<?php
/*Aray es un tipo especial de dato que representa los llamados mapas ordenados de datos

para accder a un valor se hace a traves de los [] mediante un calor y una clave

existen tres tipos de arrays



//Escalares

$frutas =["Manzans", "Peras", "Mangos", "Sandias"];

//modificar el valor del dato en el array
$frutas[1] = "Melon";
echo $frutas[1];

// Asiciativos
$estudiantes = [
    "Carlos" => 32,
    "Alaia" => 4,
    "Alexandra" => 35
];

echo $estudiantes["Alaia"];
echo $estudiantes["Alexandra"]= 36;*/

//Multidimensionales

$estudiantes = ["Carlos" => 32, "Alaia" => 4, "Alexandra" => 35,
    "ciudades" => ["Pitalito" => "Huila", "Neiva"=> "Huila", "Bucaramanga"=> "Santander"]
    ];

echo $estudiantes ["ciudades"]["Bucaramanga"]."\n";

//Contar los elementos de un array

echo count($estudiantes)."\n";

//Contar los elementos de un array incluyendo el array dentro de otro arrays

echo count($estudiantes,COUNT_RECURSIVE)."\n";
