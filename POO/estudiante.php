<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Estudiante extends Persona{
        private $numExpediente;
        private $edad;

        public function __construct($nombre,$dni,$email,$numExpediente,$edad){
            parent::__construct($nombre,$dni,$email);
            $this->numExpediente = $numExpediente;
            $this->edad = $edad;
        }

        public function getNum(){
            return $this->numExpediente;
        }

        public function getEdad(){
            return $this->edad;
        }

        public function setNum($numExpediente){
            $this->numExpediente = $numExpediente;
        }

        public function setEdad($edad){
            $this->edad = $edad;
        }

        public function mayorEdad(){
            return $this->edad>=18 ? true : false;
        }

        public function mostrar(){
            echo "<p>" . $this->nombre . ", " . $this->getDni() . ", " . $this->email . ", " . $this->numExpediente . ", " . $this->edad . "</p>";
        }

    }
    ?>
</body>
</html>