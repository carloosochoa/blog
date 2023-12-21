<?php include "../cabecera.inc";
require_once "../conexion.php";

class Vendedor extends Conexion{
    private $pdo;

    public function __construct(){
        parent::__construct();
        $this->pdo = $this->conectar();
    }

    public function Listar(){
        try{
            $query = "SELECT * FROM vendedor";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetchAll();
        
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }

    public function Insertar($numvend,$nomvend,$nombrecomer,$telefono,$calle,$ciudad,$provincia){
        
        $variables = ['nomvend', 'nombrecomer', 'ciudad', 'provincia'];
        foreach($variables as $variable){
            $$variable = mb_strtoupper($$variable);
        }

        $array = [$numvend,$nomvend,$nombrecomer,$telefono,$calle,$ciudad,$provincia];

        
        try{            
            
            $insercion = $this->pdo->prepare("INSERT INTO vendedor VALUES (?,?,?,?,?,?,?)");
            $insercion->execute($array);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function Borrar($numvend){
        try{
            $borrar = $this->pdo->prepare("DELETE FROM vendedor WHERE numvend=:numvend");
            $borrar->bindParam(":numvend", $numvend);
            $borrar->execute();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function Modificar($numvend,$nomvend,$nombrecomer,$telefono,$calle,$ciudad,$provincia){
        $variables = ['nomvend', 'nombrecomer', 'ciudad', 'provincia'];
        foreach($variables as $variable){
            $$variable = mb_strtoupper($$variable);
        }
        try{

        $array = [$nomvend,$nombrecomer,$telefono,$calle,$ciudad,$provincia,$numvend];
        $modificar = $this->pdo->prepare("UPDATE vendedor SET  nomvend = ?, nombrecomer = ?, telefono = ?, calle = ?, ciudad = ?, provincia = ? WHERE numvend = ?");
        for($i=0;$i<count($array);$i++){
            $modificar->bindParam($i+1, $array[$i]);
        }
        $modificar->execute($array);

        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}

include "pie.inc";