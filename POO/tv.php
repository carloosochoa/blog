<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    class TV{
        private $marca;
        private $canal;
        private $volumen;

        public function __construct($marca){
            $this->marca = $marca;
            $this->reiniciarTV();

        }
        public function mostrar(){
            echo $this->marca;
            echo $this->canal;
            echo $this->volumen;
        }

        public function cambiarVolumen($valor){
            if($valor>=0 && $valor <=50){
                $this->volumen = $valor;
            }
        }
        public function cambiarCanal($valor){
            if($valor>=1 && $valor <=50){
                $this->canal = $valor;
            }
        }
        public function reiniciarTV(){
            $this->canal = 1;
            $this->volumen = 50;
        }

        public function informacion(){
            echo '<p>' . $this->marca . " en el canal " . $this->canal . ", volumen " . $this->volumen; 
        }

    }

?>
</body>
</html>