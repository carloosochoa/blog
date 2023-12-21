<?php include_once("../clases/vendedor.php");
ini_set("display_errors",1);
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    try{
        $v = new Vendedor();
        $v->Modificar($_POST['numvend'],$_POST['nomvend'],$_POST['nombrecomer'],$_POST['telefono'],$_POST['calle'],$_POST['ciudad'],$_POST['provincia']);
        header("Location: ../visualizar/visualizar_vendedor.php");
        exit();
    } catch(PDOExeption $e){
        die($e->getMessage());
    }
}

?>
