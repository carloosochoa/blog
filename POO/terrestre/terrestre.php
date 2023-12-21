<?php 
include "./cabecera.inc";
include_once "./vehiculos.php";

class Terrestre extends Vehiculo{

    public function __construct($velocidad){
        parent::__construct($velocidad);
    }

    public function pasarBache(){
        return "Ha pasado un bache";
    }

    public function frenar(){
        return "Se puso el freno";
    }

}

include "./pie.inc";
?>