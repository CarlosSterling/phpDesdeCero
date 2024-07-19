<?php

$totalCamisetas = intval(readline("Ingrese el total de camisetas a comprar: "));
$preciUnidad = 15000;
$totalCompra = $totalCamisetas * $preciUnidad;

$totalCompra = ($totalCamisetas >= 3) ? $totalCompra - ($totalCompra * 0.20) : $totalCompra- ($totalCompra * 0.10);
echo "El total a pagar es de: ".$totalCompra;
