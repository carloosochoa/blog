<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Persona{
        private $dni;
        var $nombre;
        var $email;

        public function __construct($nombre,$dni,$email)
        {
            $this->nombre = $nombre;
            $this->dni = $dni;
            $this->email = $email;
        }

        public function getNombre()
        {
            return $this->nombre;
        }

        public function getDni()
        {
            return $this->dni;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        public function setDni($dni)
        {
            $this->dni = $dni;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function mostrar()
        {
            echo "<p>" . $this->nombre . ", " . $this->dni . ", " . $this->email . "</p>";
        }

    }   
    ?>
</body>
</html>