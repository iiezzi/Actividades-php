<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Objetivo contar la cantidad de notas en total

function contar($aArray){
    $cont = 0;
    foreach($aArray as $item){
        $cont++;
    }
    return $cont;
}

$aNotas = array(9,8,9.50,4,7,8);
echo "Cantidad de notas ". contar($aNotas)
?>