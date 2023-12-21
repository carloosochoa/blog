<?php

require_once "../conexion.php";
ini_set("display_errors",1);

class Direnvio extends Conexion{
    private $pdo;

    public function __construct(){
        parent::__construct();
        $this->pdo = $this->conectar();
    }

    public function Listar(){
        try{
            $query = "SELECT * FROM direnvio";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetchAll();
        
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
    
    public function Insertar($email,$calle,$calle2,$codpos,$pueblo,$provincia){
        try{            
            
            $insercion = $this->pdo->prepare("INSERT INTO direnvio VALUES (?,?,?,?,?,?)");
            $array = [$email,$calle,$calle2,$codpos,$pueblo,$provincia];
            $insercion->execute($array);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function Borrar($email){
        try{
            $borrar = $this->pdo->prepare("DELETE FROM direnvio WHERE email = :email");
            $borrar->bindParam(":email", $email);
            $borrar->execute();
    
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }
    

    public function Modificar($email,$calle,$calle2,$codpos,$pueblo,$provincia){
        try{

        $array = [$calle,$calle2,$codpos,$pueblo,$provincia,$email];
        $modificar = $this->pdo->prepare("UPDATE direnvio SET calle = ?, calle2 = ?, codpos = ?, pueblo = ?, provincia = ? WHERE email = ?;");
        $modificar->execute($array);

        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}
?>