<?php include "../cabecera.inc";
ini_set("display_errors",1);
if($_SERVER['REQUEST_METHOD'] === "GET"){
?>

<div class="contenedor_form" style="height:100vh;">
<form action="controlador_provincia.php" method="POST">
    <table class="table table-striped">
        <thead class="p-3 mb-2 bg-info text-white">
        <tr>
            <th>CODP</th>
            <th>NOMBRE</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <p><?=$_GET['codp'];?></p>
                </td>
                <td>
                <input type="text" name="<?=$_GET['nombre'];?>" value="<?=$_GET['nombre'];?>">
                </td>
            </tr>
        </tbody>
    </table>
    <input type="hidden" name="codp" value="<?=$_GET['codp'];?>">
    <input type="submit" class="btn btn-info" name="enviar">
</form>
</div>
<?php
}

include "../pie.inc";
?>