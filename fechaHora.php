<?php

date_default_timezone_set('America/Colombia');
//$fechaColombia = date("D-d-m-Y");
$fechaColombia = date("l d F Y");
echo $fechaColombia."\n";

$formato12Horas = date ("H:i a");
echo $formato12Horas."\n";

$fechaActual = date("d-m-Y H:i:A");
echo $fechaActual."\n";