<?php 
include "./cabecera.inc";
include_once "./terrestre.php";

class Carro extends Terrestre{

    private $numPuertas, $encendido;
    public function __construct($velocidad, $numPuertas,$encendido,$marca,$modelo){
        parent::__construct($velocidad);
        $this->numPuertas = $numPuertas;
        $this->encendido = $encendido;
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
    public function __set($tipo,$valor){
        if($tipo === 'numPuertas'){
            $this->numPuertas = $valor;
        }elseif($tipo === 'encendido'){
            $this->encendido = $valor;
        }elseif($tipo === 'marca'){
            $this->marca = $valor;
        }elseif($tipo === 'modelo'){
            $this->modelo = $valor;
        }elseif($tipo === 'marca'){
            $this->marca = $valor;
        }
    }

    public function __get($tipo){
        if($tipo === 'velocidad'){
            return parent::__get('velocidad');
        }elseif($tipo === 'numPuertas'){
            return $this->numPuertas;
        }elseif($tipo === 'encendido'){
            return $this->encendido;
        }elseif($tipo === 'modelo'){
            return $this->modelo;
        }elseif($tipo === 'marca'){
            return $this->marca;
        }
    }
    public function encender(){
        $this->encendido = true;
        return "encendido";
    }
    public function apagar(){
        $this->encendido = false;
        return "apagado";
    }

}

include "./pie.inc";
?>