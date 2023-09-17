<?php

if(1 > 0){
    echo "Esto es verdadero";
};

if( 1 > 2) {
    echo "esto es falso";
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(9>=8): ?>
        <h1>Expresión verdadera</h1>

    <?php endif; ?>
</body>
</html>

<!-- EJEMPLO -->

<?php
$edad=20;
if($edad>=18){
    echo "Es mayor";
};

$total=120;

if($total >100){
   echo $total*0.8;
};

?>

<?php

$numero=16;
if($numero > 15){
    echo "es mayor";
} else {
    echo "es menor";
};

?>

<?php
$llanta=4;
if($llanta >= 5){
    $total=$llanta*700;
} else {
   $total=$llanta*800;
};

echo "El total a pagar es de $".$total;

 
?>