<?php 
require_once "../conexion.php";
ini_set("display_errors",1);

class Pedido extends Conexion{
    private $pdo;

    public function __construct(){
        parent::__construct();
        $this->pdo = $this->conectar();
    }

    public function Listar(){
        try{
            $query = "SELECT * FROM pedido";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetchAll();
        
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
    
    public function Insertar($numpedido,$numvend, $fecha){
                
        try{            
            
            $insercion = $this->pdo->prepare("INSERT INTO pedido VALUES (?,?,?)");
            $array = [$numpedido, $numvend, $fecha];
            $insercion->execute($array);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function Borrar($numpedido){
        try{
            // Eliminar registros de la tabla linped asociados al pedido
            $borrarLinped = $this->pdo->prepare("DELETE FROM linped WHERE numpedido = :numpedido");
            $borrarLinped->bindParam(":numpedido", $numpedido);
            $borrarLinped->execute();
    
            // Eliminar el registro de la tabla pedido
            $borrarPedido = $this->pdo->prepare("DELETE FROM pedido WHERE numpedido = :numpedido");
            $borrarPedido->bindParam(":numpedido", $numpedido);
            $borrarPedido->execute();
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }
    

    public function Modificar($numpedido,$numvend,$fecha){
        $variables = ['numpedido','numvend', 'fecha'];
        foreach($variables as $variable){
            $$variable = mb_strtoupper($$variable);
        }
        try{

        $array = [$numpedido,$fecha,$numvend,$numpedido];
        $modificar = $this->pdo->prepare("UPDATE pedido SET  numpedido = ?, fecha = ?, numvend = ? WHERE numpedido = ?");
        $modificar->execute($array);

        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}
?>