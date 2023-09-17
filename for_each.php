<?php

$laptop=["Acer Nitro 5","Window 11","AMD Ryzen 5 4600H", "SSD 256GB","RAM 24GB"];

$frutas=[
    "Fresas"=>100,
    "Peras"=>30,
    "Sandias"=>10,
    "Melocotones"=>17,
    "Manzanas"=>9,
];

foreach ($laptop as $valor) {
    echo $valor."<br>";
}

foreach ($laptop as $key => $value) {
    echo $key." - ".$value."<br>";
}


foreach ($frutas as $valor) {
    echo $valor."<br>";
}

foreach ($frutas as $key => $value) {
    echo $key." - ".$value."<br>";
}

?>

<?php

$productos=[
    ["codigo"=>"A0001", "descripcion"=>"mouse"],
    ["codigo"=>"A0002", "descripcion"=>"teclado"],
    ["codigo"=>"A0003", "descripcion"=>"monitor"],
    ["codigo"=>"A0004", "descripcion"=>"impresora"],
];

foreach ($productos as $valor) {
  echo $valor["codigo"]." - ".$valor["descripcion"]."<br>";  
}

?>