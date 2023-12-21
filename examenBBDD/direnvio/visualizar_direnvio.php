<?php include "../cabecera.inc";
include_once("direnvio.php");
ini_set("display_errors",1);
    $d = new Direnvio();
    $direnvios = $d->Listar();
?>

<h2 class="bg-info text-dark"> DIRENVIOS</h2>
<div class="botones">
<a href="" class="btn btn-info">Localidad</a>
<a href="../usuario/visualizar_usuario.php" class="btn btn-info">Usuario</a>
<a href="../provincia/visualizar_provincia.php" class="btn btn-info">Provincia</a>
</div>
<?php
include "insertar_direnvio.php"
?>
<table class="table table-striped">
    <thead class="p-3 mb-2 bg-info text-white">
        <tr>
            <th>EMAIL</th>
            <th>CALLE</th>
            <th>CALLE2</th>
            <th>CODPOS</th>
            <th>PUEBLO</th>
            <th>PROVINCIA</th>
            <th>ACCIONES</th>
        </tr>
    </thead>
    <tbody>

        <?php
        foreach($direnvios as $direnvio){
            ?>
            <tr>
                <td><?php echo $direnvio['email'];?></td>
                <td><?php echo $direnvio['calle'];?></td>
                <td><?php echo $direnvio['calle2'];?></td>
                <td><?php echo $direnvio['codpos'];?></td>
                <td><?php echo $direnvio['pueblo'];?></td>
                <td><?php echo $direnvio['provincia'];?></td>

                <td>
                    <a class="btn btn-info" href="modificar_direnvio.php?email=<?php echo $direnvio['email'];?>&calle=<?php echo $direnvio['calle'];?>&calle2=<?php echo $direnvio['calle2'];?>&codpos=<?php echo $direnvio['codpos'];?>&pueblo=<?php echo $direnvio['pueblo'];?>&provincia=<?php echo $direnvio['provincia'];?>">Modificar</a>
                    <a href="borrar_direnvio.php?codp=<?php echo $direnvio['email'];?>" class="btn btn-danger">Borrar</a>
                </td>
            </tr>
            <?php
            }
            ?>
    </tbody>
</table>
</form>
<?php
include "../pie.inc";
?>