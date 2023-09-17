<?php

date_default_timezone_set("America/Argentina/Cordoba");

$fecha_us=date("l d F Y");
// $fecha_us=date("d/m/Y");

$hora=date("h:i a");
echo $fecha_us."<br>";
echo $hora;

?>