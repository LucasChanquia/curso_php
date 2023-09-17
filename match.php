<?php
// COMPROBACION DE IGUALDAD FUERTE ===
$a=7;
$x=10;
$y=9;
$z=7;

$resultado = match($a){
    $x, $z => "Vaalor igual a X o Z",
    $y => "Valir igual a Y",
    $z => "Valor igual a Z",
    default => "No coincide con nunguna variable"
};
echo $resultado;
?>

<?php

$edad = 20;

$resultado = match(true){
    $edad >=60 => "Eres de la tercera edad",
    $edad >=30 => "Eres adulto",
    $edad >=18 => "Eres adolescente",
    default => "Eres un niño",
} ;

echo $resultado;

?>