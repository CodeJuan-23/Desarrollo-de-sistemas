<?php

$array1=[1,2,3];
$array2=["uno","dos","tres"];

$array1=array(1,2,3);
$array2= array("uno","dos","tres");

echo "el tamaño del array es =".count($array1);
echo "<br>";


//accesar por posicion

echo "la posicion 0 es igual =".$array1[0];
echo "<br>";


//array asociativos

$array3= ["pos1"=>"azul","pos2"=>"verde"];
echo "el elemento pos1 es igual =".$array3["pos2"];
echo "<br>";

//recorrer el array asociativo por excelencia por foreach

foreach($array3 as $clave=> $valor)
{
	echo "el elemento $clave es igual a $valor";
	echo "<br>";

}


$array4 = []
