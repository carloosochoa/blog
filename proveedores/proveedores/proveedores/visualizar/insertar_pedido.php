<?php include "../cabecera.inc";
include_once "../clases/pedido.php";
ini_set("display_errors",1);
error_reporting(E_ALL);



$p = new Pedido();
$listar = $p->Listar();
// var_dump($listar[0]["numpedido"]);

?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <table class="table table-striped">
        <thead class="p-3 mb-2 bg-info text-white">
            <tr>
                <th>NUMPEDIDO</th>
                <th>NUMVEND</th>
                <th>FECHA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="number" name="numpedido">
                </td>
                <td>
                    <select name="numvend">
                    <?php
                for($i=0;$i<count($listar);$i++){
                    ?>
                        <option value="<?=$listar[$i]['numvend'];?>" name="numvend"><?=$listar[$i]['numvend'];?></option>   
                    <?php
                }
                ?>
                    </select>
                </td>
                <td>
                    <input type="text" name="fecha" value="<?=date('Y-m-d');?>">
                </td>   
            </tr>
        </tbody>
    </table>
    <input type="submit" value="Enviar" class="btn btn-info">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] === "POST"){
    try{
        $p->Insertar($_POST['numpedido'],$_POST['numvend'],$_POST['fecha']);
        header("Location: ../visualizar/visualizar_pedido.php");
        exit();
    }catch(PDOException $e){
        die($e->getMessage());
    }
}



include "../pie.inc";
?>