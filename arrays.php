<?php
// ARRAY EN VARIABLES
$estudiantes=array("Lucas","Carlos","Manuel","Yolanda");

$estudiantes[2]="claudio";

echo $estudiantes[2];

// FORMA ACTUAL => TIPO ESCALAR

$personas=["Romina", "Lucas"];

echo $personas[1];

// TIPO DE ARRAY ASOCIATIVO

$tutor=["nombre"=>"Lucas", 
"apellido"=>"Chanquia",
"edad"=>"31"];

$tutor["edad"]=23;

echo $tutor["edad"];


// ARRAY MULTIDIMENSIONALES

$tutor_2=["nombre"=>"Javier", 
"apellido"=>"Chanquia",
"edad"=>"25", 
"cursos"=>["nombre"=>"Lucas", "apellido"=>"Chanquia","edad"=>"31"]
];

echo $tutor_2["cursos"]["nombre"];

$tutor_3=["nombre"=>"Javier", 
"apellido"=>"Chanquia",
"edad"=>"25", 
"cursos"=>["PHP", "CSS", "Javascript"]
];

echo $tutor_3["cursos"][2];


echo count($tutor);

echo count($tutor_2, COUNT_RECURSIVE);