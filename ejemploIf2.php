<?php
$cantidadProducto = intval(readline("Ingrese la cantidad de productos a llevar: "));
$precio = 10000;

if ($cantidadProducto > 100) {
    $pagar = $cantidadProducto * $precio;
    $descuento = $pagar * 0.20;
    $total = $pagar - $descuento;
    echo "La cantidad a pagar por los ".$cantidadProducto." productos, es " .$total;
}else{
    echo "Lo sentimos, usted no tiene descuentos, su valor a pagar es ".$cantidadProducto * $precio;
}