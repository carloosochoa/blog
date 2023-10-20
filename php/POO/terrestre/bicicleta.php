<?php 
include "./cabecera.inc";
include_once "./terrestre.php";

class Bicicleta extends Terrestre{

    private $pedaleando;

    public function __construct($velocidad,$pedaleando,$marca,$modelo){
        parent::__construct($velocidad);
        $this->pedaleando = $pedaleando;
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function __set($tipo,$valor){
        if($tipo === 'pedaleando'){
            $this->pedaleando = $valor;
        }elseif($tipo === 'marca'){
            $this->marca = $valor;
        }elseif($tipo === 'modelo'){
            $this->modelo = $valor;
        }
    }
    public function __get($tipo){
        if($tipo === 'velocidad'){
            return parent::__get('velocidad');
        }elseif($tipo === 'pedaleando'){
            return $this->pedaleando;
        }elseif($tipo === 'marca'){
            return $this->marca;
        }elseif($tipo === 'modelo'){
            return $this->modelo;
        }
    }

    public function apedalear(){
        $this->pedaleando = true;
        return "empezando a pedalear";
    }
    public function dejarDePedalear(){
        $this->pedaleando=false;
        return "dejando de pedalear";
    }
}

include "./pie.inc";
?>