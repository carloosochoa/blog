<?php
ini_set('display_errors',1);
if($_SERVER['REQUEST_METHOD']==='POST'){
    include_once("peliculas.php");
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $any = $_POST['any'];
    $precio = $_POST['precio'];
    $imagen = $_FILES['imagen'];
    
    try{
        $p = new Peliculas();
        $ruta = $p->subir_archivo($imagen);
        $p->Modificar($id,$titulo,$genero,$any,$precio,$ruta);
        header("Location: index.php");
        exit();
    }catch (PDOExceaption $e) {
        die($e->getMessage());
    }
}
?>