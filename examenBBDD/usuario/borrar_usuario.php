<?php include_once("usuario.php");
ini_set('display_errors',1);
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    try{
        $u = new Usuario();
        $u->Borrar($_GET['email']);
        header("Location: visualizar_usuario.php");
        exit();
    } catch(PDOExeption $e){
        die($e->getMessage());
    }
}
?>