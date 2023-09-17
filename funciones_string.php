<?php

$cadena_texto="Hola Mundo PHP";

echo strtolower($cadena_texto)."<br>";

echo strtoupper($cadena_texto)."<br>";

echo ucwords($cadena_texto)."<br>";
echo "<br>";


$longitud=strlen($cadena_texto);
echo $cadena_texto." tiene ".$longitud." caracteres"."<br>";

$palabras=str_word_count($cadena_texto);
echo $cadena_texto." tiene ".$palabras." palabras"."<br>";


?>