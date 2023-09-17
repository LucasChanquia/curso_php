<?php

$c=1;

while($c <=20){
    echo $c."<br>";
    if($c===10){
        break;
        
    }
    $c++;
}

$pc=["so","ssd","gpu","ram","cpu"];

foreach ($pc as $key ) {
    if($key === "gpu"){
        break;
    };
    echo $key."<br>";
};

?>

