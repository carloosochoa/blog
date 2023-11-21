<?php include "../cabecera2.inc";
require_once "conexion.php";

class Peliculas extends Conexion{
    private $pdo;

    public function __construct(){
        parent::__construct();
        $this->pdo = $this->conectar();
    }

    public function Listar(){
        try{
            $query = "SELECT * FROM video";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetchAll();
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }

    public function Insertar($id,$titulo,$genero,$any,$precio,$imagen){
        try{
            $insercion = $this->pdo->prepare("INSERT INTO video values (?,?,?,?,?,?)");
            $array = [$id,$titulo,$genero,$any,$precio,$imagen];

            for($i=0;$i<count($array);$i++){
                $insercion->bindParam($i+1, $array[$i]);
            }
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function Borrar($valor){
        try{
            $borrar = $this->pdo->prepare("DELETE FROM video WHERE dni=:dni");
            $borrar->bindParam(":dni",$valor);
            $borrar->execute();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function ModificarP($id,$titulo,$genero,$any,$precio,$imagen){
        try{
            $modificar = $this->pdo->prepare("UPDATE video SET Titulo=:titulo, Genero=:genero, Any=:any, Precio=:precio, imagen=:imagen WHERE id=:id");
            $modificar->bindParam(":titulo",$titulo);
            $modificar->bindParam(":genero",$genero);
            $modificar->bindParam(":any",$any);
            $modificar->bindParam(":precio",$precio);
            $modificar->bindParam(":imagen",$imagen);
            $modificar->bindParam(":id",$id);
            $modificar->execute();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}




include "../../pie.inc";?>
