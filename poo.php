<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Persona{
    protected $nombre;
    protected $dni;
    protected $edad;
    protected $nacionalidad;

    public function setNombre($nombre){ $this->nombre = $nombre; }
    public function getNombre(){ return $this->nombre; }

    public function setDni($dni){ $this->dni = $dni; }
    public function getDni(){ return $this->dni; }

    public function setEdad($edad){ $this->edad = $edad; }
    public function getEdad(){ return $this->edad; }

    public function setNacionalidad($nacionalidad){ $this->nacionalidad = $nacionalidad; }
    public function getNacionalidad(){ return $this->nacionalidad; }

    public function imprimir(){
    }
}

class Alumno extends Persona {
    private $legajo;
    private $notaPortfolio;
    private $notaPhp;
    private $notaProyecto;

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }

    public function __construct(){
        $this ->notaPortfolio =0.0;
        $this ->notaPhp =0.0;
        $this ->notaProyecto =0.0;
    }
    public function __destruct() {
        echo "Destruyendo el objeto " . $this->nombre . "<br>";
    }
    public function imprimir(){
        echo "Alumno: " . $this ->nombre . "<br>";
        echo "Documento: " . $this ->dni . "<br>";
        echo "Nota Portfolio: " . $this ->notaPortfolio . "<br><br>";

    }
    public function calcularPromedio(){

    }
}

class Docente extends Persona{
    private $especialidad;

    const ESPECIALIDAD_WP = "Wordpress";
    const ESPECIALIDAD_ECO = "Economia Aplicada";
    const ESPECIALIDAD_PGM = "Programacion";

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }

    public function __destruct() {
        echo "Destruyendo el objeto " . $this->nombre . "<br>";
    }

    public function imprimir(){
        echo "Nombre del docente: " . $this->nombre . "<br>";
        echo "Especialidad: " . $this ->especialidad . "<br><br>";
    }
    public function imprimirEspecialidadesHabilitadas(){
        echo "Especialidades: <br>";
        echo self :: ESPECIALIDAD_WP . "<br>";
        echo self :: ESPECIALIDAD_ECO . "<br>";
        echo self :: ESPECIALIDAD_PGM . "<br><br>";
    }
}

//Programa
$alumno1 = new Alumno();
$alumno1->nombre = "Iñaki Iezzi";
$alumno1->dni = "43312557";
$alumno1->edad = "21";
$alumno1->nacionalidad = "Argentina";
$alumno1->notaPortfolio = "9";
$alumno1->notaPhp = "8";
$alumno1->notaProtecto = "7";
$alumno1->imprimir();

$alumno2 = new Alumno();
$alumno2->nombre = "Brian Freije";
$alumno2->dni = "42782231";
$alumno2->edad = "23";
$alumno2->nacionalidad = "Argentina";
$alumno2->notaPortfolio = "8";
$alumno2->notaPhp = "9";
$alumno2->notaProtecto = "10";
$alumno2->imprimir();

$docente = new Docente();
$docente->nombre = "Nelson Tarche";
$docente->especialidad = Docente ::ESPECIALIDAD_PGM;
$docente->imprimir();
$docente->imprimirEspecialidadesHabilitadas();

?>