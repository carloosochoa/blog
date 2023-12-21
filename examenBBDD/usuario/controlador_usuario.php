<?php include_once("usuario.php");
ini_set("display_errors",1);
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    try{
        $u = new Usuario();
        $u->Modificar($_POST["email"],$_POST["nombre"],$_POST["apellidos"],$_POST['dni'],$_POST['telefono']);
        header("Location: visualizar_usuario.php");
        exit();
    } catch(PDOExeption $e){
        die($e->getMessage());
    }
}

?>
