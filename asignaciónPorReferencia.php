<?php
//ambas variables terminan apuen tando al mismo dato

$texto = "Hoy juega la sele";
$variable1 = $texto;
$variable2 = &$texto;

echo $variable2;

$texto = "Carlos Sterling";
echo $variable2;