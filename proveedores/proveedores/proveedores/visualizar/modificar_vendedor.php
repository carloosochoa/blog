<?php include "../cabecera.inc";
include_once("../clases/vendedor.php");
ini_set("display_errors",1);
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $array = [$_GET['numvend'],$_GET['nomvend'],$_GET['nombrecomer'],$_GET['telefono'],$_GET['calle'],$_GET['ciudad'],$_GET['provincia']];
    $nombres = ['numvend','nomvend','nombrecomer','telefono','calle','ciudad','provincia'];
    ?>

<div class="contenedor_form" style="height:100vh;">
<form action="../controlador/controlador_vendedor.php" method="POST">
    <table class="table table-striped">
        <thead class="p-3 mb-2 bg-info text-white">
        <tr>
            <th>NUMVEND</th>
            <th>NOMVEND</th>
            <th>NOMBRECOMER</th>
            <th>TELEFONO</th>
            <th>CALLE</th>
            <th>CIUDAD</th>
            <th>PROVINCIA</th>
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