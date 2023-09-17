<?php

$variable = 10;

if($variable > 100){
    echo "el numero es mayor";
}elseif($variable === 10){
    echo "el numero es igual";
}else{
    echo "el numero es menor";
};

?>


<?php

$computadoras=12;
$precio= $computadoras*700;

if($computadoras < 5){
    $precio = $precio*0.9;
} elseif($computadoras >=5 && $computadoras < 10){
    $precio = $precio*0.8;
} elseif($precio >=10){
    $precio = $precio*0.6;
};
echo "El precio total es de $".$precio;
?>