<?php
    if($_SERVER['REQUEST_METHOD']==='GET' && isset($_GET['id'])){
        $id = $_GET['id'];
        try{
            include_once("peliculas.php");
            $p = new Peliculas();
            $p->Borrar($id);
            header("Location: index.php");
            exit();
        }catch (PDOException $e) {
            die($e->getMessage());
        }
    }
?>