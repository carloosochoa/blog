<?php include_once("provincia.php");
ini_set("display_errors",1);
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    try{
        $p = new Provincia();
        $p->Modificar($_POST["codp"],$_POST["nombre"]);
        header("Location: visualizar_provincia.php");
        exit();
    } catch(PDOExeption $e){
        die($e->getMessage());
    }
}

?>
