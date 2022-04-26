<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$valor =rand(1,5);
    echo $valor == 1||3||5? "El número $valor es impar":"El numero $valor es par";
?>

<!-- Correccion forma correcta-->

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($valor ==1 || $valor ==3 || $valor ==5){
    echo "El número $valor es impar";
} else {
    echo "El número $valor es par";
}
?>

<!-- Correccion forma correcta variable-->
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($valor %2 == 0){
    echo "El num $valor es par";
} else{
    echo "El num $valor es impar";
}
?>