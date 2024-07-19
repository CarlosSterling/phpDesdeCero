<?php

//forma antigua

define("NOMBRE", "Carlos");

echo  NOMBRE;

//forma nueva

const APELLIDO = "Sterling";

echo APELLIDO;


//a partir de php 7 se pueden asignar arraya a las constantes

const ALUMNOS =["Carlos", "Alaia", "Alexandra"];

echo ALUMNOS[0];