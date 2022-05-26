<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Persona{
    public $nombre;
    public $dni;
    public $nacionalidad;
    public $edad;

    public function imprimir(){

    }
}

class Alumno extends Persona {
    public $legajo;
    public $notaPortfolio;
    public $notaPhp;
    public $notaProyecto;

    public function __construct(){
        $this ->notaPortfolio =0.0;
        $this ->notaPhp =0.0;
        $this ->notaProyecto =0.0;
    }
    public function imprimir(){

    }
    public function calcularPromedio(){

    }
}

class Docente extends Persona{
    public $especialidad;

    public function imprimir(){

    }
    public function calcularEspecialidadesHabilitadas(){

    }
}
?>