<?php include_once("direnvio.php");
ini_set("display_errors",1);
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    try{
        $d = new Direnvio();
        $d->Modificar($_POST["email"],$_POST["calle"],$_POST["calle2"],$_POST['codpos'],$_POST['pueblo'],$_POST['provincia']);
        header("Location: visualizar_direnvio.php");
        exit();
    } catch(PDOExeption $e){
        die($e->getMessage());
    }
}

?>
