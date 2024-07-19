<?php

$texto = "Colombia";
$pais = $texto;
$departamento =&$texto;

echo $pais."\n";;

$texto = "Carlos Sterling";

echo $pais."\n";

//Asignaciòn por referencia