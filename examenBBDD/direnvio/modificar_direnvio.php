<?php include "../cabecera.inc";
include_once("../localidad/localidad.php");
include_once("../provincia/provincia.php");
ini_set("display_errors",1);
$l = new localidad();
$localidad = $l->Listar();

$p = new Provincia();
$provincia = $p->Listar();
if($_SERVER['REQUEST_METHOD'] === "GET"){
?>

<div class="contenedor_form" style="height:100vh;">
<form action="controlador_direnvio.php" method="POST">
    <table class="table table-striped">
        <thead class="p-3 mb-2 bg-info text-white">
        <tr>
            <th>EMAIL</th>
            <th>CALLE</th>
            <th>CALLE2</th>
            <tH>CODPOS</tH>
            <th>PUEBLO</th>
            <th>PROVINCIA</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <p><?=$_GET['email']?></p>
                </td>
            
                <td>
                    <input type="text" name="calle" value="<?=$_GET['calle']?>">
                </td>
                <td>
                    <input type="text" name="calle2" value="<?=$_GET['calle2'];?>">
                </td>
                <td>
                <input type="text" name="codpos" value="<?=$_GET['codpos'];?>">
                </td>
                <td>
                    <select name="pueblo">
                    <?php
                for($i=0;$i<count($localidad);$i++){
                    ?>
                        <option value="<?=$localidad[$i]['codm'];?>" name="pueblo"><?=$localidad[$i]['pueblo'];?></option>   
                    <?php
                }
                ?>
                    </select>
                </td>
                <td>
                    <select name="provincia">
                    <?php
                for($i=0;$i<count($provincia);$i++){
                    ?>
                        <option value="<?=$provincia[$i]['codp'];?>" name="provincia"><?=$provincia[$i]['nombre'];?></option>   
                    <?php
                }
                ?>
                    </select>
                </td>

            </tr>
        </tbody>
    </table>
    <input type="hidden" name="email" value="<?=$_GET['email'];?>">
    <input type="submit" class="btn btn-info" name="enviar">
</form>
</div>
<?php
}

include "../pie.inc";
?>