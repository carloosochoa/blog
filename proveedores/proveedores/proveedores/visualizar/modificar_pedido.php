<?php include "../cabecera.inc";
include_once("../clases/pedido.php");
ini_set("display_errors",1);
if($_SERVER['REQUEST_METHOD'] === "GET"){

    $array = [$_GET["numpedido"],$_GET["numvend"],$_GET["fecha"]];
    $nombres = ["numpedido","numvend","fecha"];
    
?>

<div class="contenedor_form" style="height:100vh;">
<form action="../controlador/controlador_pedido.php" method="POST">
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
                <?php
                for($i=0;$i<count($array); $i++){
                    ?>
                    <td>
                        <input type="text" name="<?=$nombres[$i]?>" value="<?=$array[$i]?>">
                    </td>
                    <?php
                }
                ?>
            </tr>
        </tbody>
    </table>
    <input type="submit" class="btn btn-info" name="enviar">
</form>
</div>
<?php
}

include "../pie.inc";
?>