<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

//Contador del 1 al 100

    for($i=1; $i<=100;$i+=1){
        echo $i. "<br>";
    }

//Contador del 1 al 100 pero con pares

    for($i=0; $i<=100;$i+=2){
        echo $i. "<br>";
    }


//Contador del 1 al 100 pero interrumpiendo en el 60

    for($i=0; $i<=100 && $i !=62; $i+=2){
        echo $i. "<br>";
    }

//Contador del 1 al 100 pero interrumpiendo en el 60 con break

    for ($i = 2; $i <= 100; $i += 2) {
        echo $i . "<br>";
        if ($i == 60) {
            break;
        }
    }
?> 