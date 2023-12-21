<?php include "cabecera2.inc";
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

    public function Insertar($titulo,$genero,$any,$precio,$imagen){
        try{
        
            $insercion = $this->pdo->prepare("INSERT INTO video(Titulo,Genero,Any,Precio,imagen) values (:titulo,:genero,:any,:precio,:imagen)");
            $insercion->bindParam(":titulo",$titulo);
            $insercion->bindParam(":genero",$genero);
            $insercion->bindParam(":any",$any);
            $insercion->bindParam(":precio",$precio);
            $insercion->bindParam(":imagen",$imagen);

            $insercion->execute();

        }catch(PDOException $e){
            die($e->getMessage());
        }
     }

    public function Borrar($valor){
        try{
            $borrar = $this->pdo->prepare("DELETE FROM video WHERE id=:id");
            $borrar->bindParam(":id",$valor);
            $borrar->execute();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function Modificar($id,$titulo,$genero,$any,$precio,$img){
        try{
            $modificar = $this->pdo->prepare("UPDATE video SET Titulo=:titulo, Genero=:genero, Any=:any, Precio=:precio, imagen=:imagen WHERE id=:id");
            $modificar->bindParam(":titulo",$titulo);
            $modificar->bindParam(":genero",$genero);
            $modificar->bindParam(":any",$any);
            $modificar->bindParam(":precio",$precio);
            $modificar->bindParam(":imagen",$img);
            $modificar->bindParam(":id",$id);
            $modificar->execute();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function subir_archivo($img){
        if(is_uploaded_file($img['tmp_name'])){
            $nombreDirectorio = "/opt/lampp/htdocs/curso23-24/peliculasPOO/img/";
            $nombreFichero = $img['name'];
            move_uploaded_file ($img['tmp_name'], $nombreDirectorio .
            $nombreFichero);
            return "/curso23-24/peliculasPOO/img/" . $nombreFichero;
        }else
            print("No se ha podido subir el fichero\n");
    }
}




include "pie.inc";?>
