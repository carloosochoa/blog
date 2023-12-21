<?php include "../cabecera.inc";
require_once "../conexion.php";

class Pieza extends Conexion{
    private $pdo;

    public function __construct(){
        parent::__construct();
        $this->pdo = $this->conectar();
    }

    public function Listar(){
        try{
            $query = "SELECT * FROM pieza";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetchAll();
        
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }

    public function Insertar($numpieza,$nompieza,$preciovent){

            $nompieza = mb_strtoupper($nompieza);

        $array = [$numpieza,$nompieza,$preciovent];

        
        try{            
            $insercion = $this->pdo->prepare("INSERT INTO pieza VALUES (?,?,?)");
            $insercion->execute($array);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function Borrar($numpieza){
        try{
            $borrar = $this->pdo->prepare("DELETE FROM pieza WHERE numpieza=:numpieza");
            $borrar->bindParam(":numpieza", $numpieza);
            $borrar->execute();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function Modificar($numpieza,$nompieza,$preciovent){
            $nompieza = mb_strtoupper($nompieza);
        try{

        $array = [$nompieza,$preciovent,$numpieza];
        $modificar = $this->pdo->prepare("UPDATE pieza SET  nompieza = ?, preciovent = ? WHERE numpieza = ?");
        $modificar->execute($array);

        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}


include "../pie.inc";