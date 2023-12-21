<?php include "../cabecera.inc";
include_once "../clases/pedido.php";
ini_set("display_errors",1);
error_reporting(E_ALL);

$p = new Pedido();
$pedidos = $p->Listar();

?>
<h2 class="bg-info text-dark">PEDIDO</h2>
<?php
include "insertar_pedido.php";
?>
<table class="table table-striped">
    <thead class="p-3 mb-2 bg-info text-white">
        <tr>
            <th>NUMPEDIDO</th>
            <th>NUMVEND</th>
            <th>FECHA</th>
            <th>ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($pedidos as $pedido){
            ?>
            <tr>
                <td><?php echo $pedido['numpedido'];?></td>
                <td><?php echo $pedido['numvend'];?></td>
                <td><?php echo $pedido['fecha'];?></td>
                <td>
                    <a class="btn btn-info" href="modificar_pedido.php?numpedido=<?php echo $pedido['numpedido']; ?>&numvend=<?php echo $pedido["numvend"]; ?>&fecha=<?php echo $pedido['fecha']; ?>">Modificar</a>
                    <a href="borrar_pedido.php?numpedido=<?=$pedido['numpedido'];?>" class="btn btn-danger">Borrar</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
<?php
include "../pie.inc";
?>

