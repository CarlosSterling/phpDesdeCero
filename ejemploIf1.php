<?php

$edad = intval(readline("Ingrese su edad: "));

if ($edad < 18) {
    echo "Usted es menor de edad";
}else{
    echo "Usted es mayor de edad";
}