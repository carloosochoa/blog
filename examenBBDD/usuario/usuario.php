<?php

require_once "../conexion.php";
ini_set("display_errors",1);

class Usuario extends Conexion{
    private $pdo;

    public function __construct(){
        parent::__construct();
        $this->pdo = $this->conectar();
    }

    public function Listar(){
        try{
            $query = "SELECT * FROM usuario";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetchAll();
        
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
    
    public function Insertar($email,$nombre,$apellidos,$dni,$telefono,$calle,$calle2,$codpos,$nacido){
                
        try{            
            
            $insercion = $this->pdo->prepare("INSERT INTO usuario VALUES (?,?,?,?,?,?,?,?,?)");
            $array = [$email,$nombre,$apellidos,$dni,$telefono,$calle,$calle2,$codpos,$nacido];
            $insercion->execute($array);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function Borrar($email){
        try{
            $borrar = $this->pdo->prepare("DELETE FROM usuario WHERE email = :email");
            $borrar->bindParam(":email", $email);
            $borrar->execute();
    
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }
    

    public function Modificar($email,$nombre,$apellidos,$dni,$telefono){
        $variables = ['nombre','apellidos','dni','telefono','calle','calle2','codpos','nacido'];
        foreach($variables as $variable){
            $$variable = mb_strtoupper($$variable);
        }
        try{

        $array = [$nombre,$apellidos,$dni,$telefono,$email];
        $modificar = $this->pdo->prepare("UPDATE usuario SET  nombre = ?, apellidos = ?, dni = ?, telefono = ? WHERE email = ?");
        $modificar->execute($array);

        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}
?>