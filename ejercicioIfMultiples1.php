<?php
$dia = readline("Ingrese un numero del 1 al 7: ");

if ($dia == 1){
    echo "El día seleccionado es LUNES";
}elseif ($dia == 2){
    echo "El día seleccionado es MRTES";
}elseif ($dia == 3){
    echo "El día seleccionado es Miercoles";
}elseif ($dia == 4){
    echo "El día seleccionado es Jueves";
}elseif ($dia == 5){
    echo "El día seleccionado es Viernes";
}elseif ($dia == 6){
    echo "El día seleccionado es SABADO";
}elseif ($dia == 7){
    echo "El día seleccionado es DOMINGO";
}else{
    echo "Ingrese un numero que este en el rango solicitado";
}