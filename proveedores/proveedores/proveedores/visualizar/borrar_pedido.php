<?php include "../clases/pedido.php";
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    try{
        $p = new Pedido();
            $p->Borrar($_POST['numpedido']);
            header("Location: ../visualizar/visualizar_pedido.php");
            exit();
    } catch(PDOExeption $e){
        die($e->getMessage());
    }
}
?>