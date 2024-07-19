<?php
function saludo($nombre){
    return "Hola ".$nombre."\n";
}

//Primer método
 echo saludo("Carlos");

//segundo método

$usuario = "Alaia";
echo saludo($usuario);

//Tercer método

echo saludo($nombre = "Alexandra");

