<?php include "cabecera2.inc";

class Conexion{
    private $pdo;
    private $host;
    private $bbdd;
    private $usuario;
    private $passwd;

    public function __construct(){
        $this->pdo=null;
        $this->host = "localhost";
        $this->bbdd = "peliculas";
        $this->usuario = "root";
        $this->passwd= "";
    }

    public function conectar(){
        try{
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->bbdd;charset=utf8",$this->usuario, $this->passwd);
            return $this->pdo;
        }catch(PDOException $e){
            print " <p class=\"aviso\">Error: No puede conectarse con " .
            "la base de datos. {$e->getMessage()}</p>\n";
            exit;
        }
    }
}


include "pie.inc";?>



