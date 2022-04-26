<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// simbolo + (suma)
// simbolo - (resta)
// simbolo * (multiplicacion)
// simbolo / (division)

function calcularAreaRect($base,$altura){
    return $base * $altura;
}
echo "el area es " . calcularAreaRect(100, 0.60)."<br>";
echo "el area es " . calcularAreaRect(800, 300);
?>