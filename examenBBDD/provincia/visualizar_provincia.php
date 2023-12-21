<?php include "../cabecera.inc";
include_once("provincia.php");
ini_set("display_errors",1);
    $p = new Provincia();
    $provincias = $p->Listar();
?>

<h2 class="bg-info text-dark"> PROVINCIA</h2>
<h2 class="bg-info text-dark"> USUARIO</h2>
<div class="botones">
<a href="" class="btn btn-info">Localidad</a>
<a href="../direnvio/visualizar_direnvio.php" class="btn btn-info">Direnvio</a>
<a href="../usuario/visualizar_usuario.php" class="btn btn-info">Usuario</a>
</div>
<table class="table table-striped">
    <thead class="p-3 mb-2 bg-info text-white">
        <tr>
            <th>CODP</th>
            <th>NOMBRE</th>
            <th>ACCIONES</th>
        </tr>
    </thead>
    <tbody>

        <?php
        foreach($provincias as $provincia){
            ?>
            <tr>
                <td><?php echo $provincia['codp'];?></td>
                <td><?php echo $provincia['nombre'];?></td>

                <td>
                    <a class="btn btn-info" href="modificar_provincia.php?codp=<?php echo $provincia['codp'];?>&nombre=<?php echo $provincia['nombre'];?>">Modificar</a>
                    <a href="borrar_provincia.php?codp=<?php echo $provincia['codp'];?>" class="btn btn-danger">Borrar</a>
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