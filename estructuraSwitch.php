<?php

$dia = strval(readline("Ingrese un numero entre el 1 y el 7: "));

switch ($dia) {
    case '1':
        echo "El número ingresado corresponde al día lunes";
        break;
    case '2':
        echo "El número ingresado corresponde al día martes";
        break;
    case '3':
        echo "El número ingresado corresponde al día Miércoles";
        break;
    case '4':
        echo "El número ingresado corresponde al día Jueves";
        break;
    case '5':
        echo "El número ingresado corresponde al día viernes";
        break;
    case '6':
        echo "El número ingresado corresponde al día Sábado";
        break;
    case '7':
        echo "El número ingresado corresponde al día Domingo";
        break;
    default:
        echo "Ingrese una opción valida";
}