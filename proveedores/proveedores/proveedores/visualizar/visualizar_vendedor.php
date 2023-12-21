<?php include "../cabecera.inc";
include_once "../clases/vendedor.php";
ini_set("display_errors",1);

$v = new Vendedor();
$vendedores = $v->Listar();

?>
<h2 class="bg-info text-dark"> VENDEDORES</h2>
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
            <th>ACCIONES</th>
            <th>SUMINISTRAR</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($vendedores as $vendedor){
            ?>
            <tr>
                <td><?php echo $vendedor['numvend'];?></td>
                <td><?php echo $vendedor['nomvend'];?></td>
                <td><?php echo $vendedor['nombrecomer'];?></td>
                <td><?php echo $vendedor['telefono'];?></td>
                <td><?php echo $vendedor['calle'];?></td>
                <td><?php echo $vendedor['ciudad'];?></td>
                <td><?php echo $vendedor['provincia'];?></td>
                <td>
                    <a href="modificar_vendedor.php?numvend=<?php echo $vendedor['numvend']; ?>&nomvend=<?php echo $vendedor['nomvend']; ?>&nombrecomer=<?php echo $vendedor['nombrecomer']; ?>&telefono=<?php echo $vendedor['telefono']; ?>&calle=<?php echo $vendedor['calle']; ?>&ciudad=<?php echo $vendedor['ciudad']; ?>&provincia=<?php echo $vendedor['provincia']; ?>" class="btn btn-primary">Modificar</a>
                    <a href="borrar_vendedor.php" class="btn btn-danger">Borrar</a>
                </td>
                <td>
                    <a href="visualizar_suministrar_vendedor.php?numvend=<?= $vendedor['numvend'];?>" class="btn btn-warning">Suministrar</a>
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

