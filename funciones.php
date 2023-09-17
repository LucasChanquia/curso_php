<?php


function saludo($nombre, $apellido){
    
    echo "Hola, mi nombre es: ".$nombre." ".$apellido;
}
saludo("Lucas", "Chanquia"); 
echo "<br>";
saludo("Luis", "Martin");
echo "<br>";
saludo("Ricardo", "Churro");
echo "<br>";
echo "<br>";


function promedio_alumno($nota_1,$nota_2,$nota_3){
    $promedio=($nota_1+$nota_2+$nota_3)/3;
    return $promedio;
};

echo "El promedio es: ".promedio_alumno(7,9,6);
echo "<br>";
echo "El promedio es: ".promedio_alumno(10,1,5);
echo "<br>";
echo "El promedio es: ".promedio_alumno(6,7,6);
echo "<br>";

?>