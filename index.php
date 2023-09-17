

<?php

$materias=$_POST['asignatura'];


foreach ($materias as $key ) {
    echo $key."<br>";
};

echo "<br>";


$fresa=$_POST['frutas'];

foreach ($fresa as $key ) {
    echo $key."<br>";
}

?>