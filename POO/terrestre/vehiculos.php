<?php
include "./cabecera.inc";

class Vehiculo{

    private $velocidad;

    public function __construct($velocidad){
        $this->velocidad = $velocidad;
    }
    
    public function __set($tipo, $valor){
        if ($tipo === "velocidad") {
            $this->velocidad = $valor;
        }
    }
    public function __get($tipo){
        if($tipo === "velocidad"){
            return $this->velocidad;
        }
    }
    
    public function aumentarVelocidad($valor){
        $this->velocidad += $valor;
    }
    public function disminuirVelocidad($valor){
        $this->velocidad -= $valor;
    }
    public function velocidadMaxima(){
        $this->velocidad = 0;
    }
}

?>
<?php include "./pie.inc"?>
