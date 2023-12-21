<?php include "../cabecera.inc";
ini_set("display_errors",1);
if($_SERVER['REQUEST_METHOD'] === "GET"){
    $array = [$_GET["email"],$_GET["nombre"],$_GET["apellidos"],$_GET['dni'],$_GET['telefono']];
    $nombres = ['email','nombre','apellidos','dni','telefono'];
?>

<div class="contenedor_form" style="height:100vh;">
<form action="controlador_usuario.php" method="POST">
    <table class="table table-striped">
        <thead class="p-3 mb-2 bg-info text-white">
        <tr>
            <th>EMAIL</th>
            <th>NOMBRE</th>
            <th>APELLIDOS</th>
            <th>DNI</th>
            <th>TELÉFONO</th>
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