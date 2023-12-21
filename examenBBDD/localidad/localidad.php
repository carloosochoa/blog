<?php

require_once "../conexion.php";
ini_set("display_errors",1);

class Localidad extends Conexion{
    private $pdo;

    public function __construct(){
        parent::__construct();
        $this->pdo = $this->conectar();
    }

    public function Listar(){
        try{
            $query = "SELECT * FROM localidad";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetchAll();
        
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
    
    public function Insertar($codm,$pueblo,$provincia){
                
        try{            
            
            $insercion = $this->pdo->prepare("INSERT INTO localidad VALUES (?,?,?)");
            $array = [$codm,$pueblo,$provincia];
            $insercion->execute($array);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function Borrar($codm){
        try{
            $borrar = $this->pdo->prepare("DELETE FROM localidad WHERE codm = :codm");
            $borrar->bindParam(":codm", $codm);
            $borrar->execute();
    
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }
    

    public function Modificar($codm,$pueblo,$provincia){
        $variables = ['codm','pueblo','pueblo','provincia'];
        foreach($variables as $variable){
            $$variable = mb_strtoupper($$variable);
        }
        try{

        $array = [$pueblo,$provincia,$codm];
        $modificar = $this->pdo->prepare("UPDATE localidad SET  pueblo = ?, provincia = ?WHERE codm = ?");
        $modificar->execute($array);

        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}
?>