
<!-- <operaton> ? <true value> : <false value> -->


<?php
(5>7) ? $resultado="correcto":$resultado="incorrecto";

echo $resultado;
?>

<?php
$camisas=2;
$total= $camisas*10;
$total = ($camisas >=3) ? $total*0.8 : $total*0.9;
echo "El total a abonar es: $".$total;
?>