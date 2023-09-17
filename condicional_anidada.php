<?php

$edad=60;
$genero="M";

if($genero ==="M" && $edad >=60){
    echo "Puede jubilarse";
} elseif($genero === "F" && $edad>=54) {
    echo "Puede jubilarse";
} else {
    echo "No puede jubilarse";
}

?>