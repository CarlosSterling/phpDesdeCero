<?php

$edad = intval(readline("ingrese su edad: "));
$genero = readline("ingrese su genero (Masculino o Femenino): ");
$genero = ucfirst($genero);

if ($genero == "Masculino") {
    if ($edad >= 60) {
        echo "Usted ya esta en edad de pensión";
    } else {
        echo "Lo sentimos, Ud no se puede pensionar";
    }
}elseif ($genero == "Femenino") {
    if ($edad >= 54) {
        echo "Usted ya esta en edad de pensión";
    } else {
        echo "Lo sentimos, Ud no se puede pensionar";
    }
    }else{
    echo "Ingrese una genero valido";
}