<?php

require_once "../conexion.php";
ini_set("display_errors",1);

class Provincia extends Conexion{
    private $pdo;

    public function __construct(){
        parent::__construct();
        $this->pdo = $this->conectar();
    }

    public function Listar(){
        try{
            $query = "SELECT * FROM provincia";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetchAll();
        
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
    
    public function Insertar($codp, $nombre){
                
        try{            
            
            $insercion = $this->pdo->prepare("INSERT INTO provincia VALUES (?,?)");
            $array = [$codp,$nombre];
            $insercion->execute($array);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function Borrar($codp){
        try{
            $borrar = $this->pdo->prepare("DELETE FROM provincia WHERE codp = :codp");
            $borrar->bindParam(":codp", $codp);
            $borrar->execute();
    
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }
    

    public function Modificar($codp,$nombre){
        $variables = ['codp','nombre'];
        foreach($variables as $variable){
            $$variable = mb_strtoupper($$variable);
        }
        try{

        $array = [$nombre,$codp];
        $modificar = $this->pdo->prepare("UPDATE provincia SET nombre = ? WHERE codp = ?");
        $modificar->execute($array);

        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}
?>