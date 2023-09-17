<?php

$texto = "El Salvador";
// ASIGNACION NORMAL
$variable_1=$texto;
// ASIGNACION POR REFERENCIA
$variable_2= &$texto;

echo $variable_2;

$texto="Lucas Chanquia";

echo $variable_2;