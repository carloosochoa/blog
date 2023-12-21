<?php include_once("../clases/pedido.php");
ini_set("display_errors",1);
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    try{
        $p = new Pedido();
        $p->Modificar($_POST['numpedido'],$_POST['numvend'],$_POST['fecha']);
        header("Location: ../visualizar/visualizar_pedido.php");
        exit();
        }catch(PDOExeption $e){
        die($e->getMessage());
    }
}

?>