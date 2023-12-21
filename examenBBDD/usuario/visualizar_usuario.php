<?php include "../cabecera.inc";
include_once("usuario.php");
ini_set("display_errors",1);
    $u = new Usuario();
    $usuarios = $u->Listar();
?>

<h2 class="bg-info text-dark"> USUARIO</h2>
<div class="botones">
<a href="" class="btn btn-info">Localidad</a>
<a href="../direnvio/visualizar_direnvio.php" class="btn btn-info">Direnvio</a>
<a href="../provincia/visualizar_provincia.php" class="btn btn-info">Provincia</a>
</div>
<?php include "insertar_usuario.php";?>
<table class="table table-striped">
    <thead class="p-3 mb-2 bg-info text-white">
        <tr>
            <th>EMAIL</th>
            <th>NOMBRE</th>
            <th>APELLIDOS</th>
            <th>DNI</th>
            <th>TELÉFONO</th>
            <th>ACCIONES</th>
        </tr>
    </thead>
    <tbody>

        <?php
        foreach($usuarios as $usuario){
            ?>
            <tr>
                <td><?php echo $usuario['email'];?></td>
                <td><?php echo $usuario['nombre'];?></td>
                <td><?php echo $usuario['apellidos'];?></td>
                <td><?php echo $usuario['dni'];?></td>
                <td><?php echo $usuario['telefono'];?></td>
                <td>
                    <a class="btn btn-info" href="modificar_usuario.php?email=<?php echo $usuario['email'];?>&nombre=<?php echo $usuario['nombre'];?>&apellidos=<?php echo $usuario['apellidos'];?>&dni=<?php echo $usuario['dni'];?>&telefono=<?php echo $usuario['telefono'];?>">Modificar</a>
                    <a href="borrar_usuario.php?email=<?php echo $usuario['email'];?>" class="btn btn-danger">Borrar</a>
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