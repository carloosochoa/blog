<?php include "../cabecera.inc";
include_once("../localidad/localidad.php");
include_once("../provincia/provincia.php");
include_once("../usuario/usuario.php");
include_once("direnvio.php");
ini_set("display_errors",1);
error_reporting(E_ALL);

$d = new Direnvio();
$direnvios = $d->Listar();

$l = new localidad();
$localidad = $l->Listar();

$p = new Provincia();
$provincia = $p->Listar();

$u = new Usuario();
$usuario = $u->Listar();

?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <table class="table table-striped">
        <thead class="p-3 mb-2 bg-info text-white">
            <tr>
            <th>EMAIL</th>
            <th>CALLE</th>
            <th>CALLE2</th>
            <th>CODPOS</th>
            <th>PUEBLO</th>
            <th>PROVINCIA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                <select name="usuario">
                    <?php
                for($i=0;$i<count($usuario);$i++){
                    ?>
                        <option value="<?=$usuario[$i]['email'];?>" name="email" ><?=$usuario[$i]['email'];?></option>   
                    <?php
                }
                ?>
                    </select>
                </td>
                <td>
                    <input type="text" name="calle">
                </td>
                <td>
                    <input type="text" name="calle2">
                </td>
                <td>
                    <input type="text" name="codpos">
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
    <input type="submit" value="Enviar" class="btn btn-info">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] === "POST"){
    try{
        $d->Insertar($_POST['usuario'],$_POST['calle'],$_POST['calle2'],$_POST['codpos'],$_POST['pueblo'],'02');
        header("Location: visualizar_direnvio.php");
        exit();
    }catch(PDOException $e){
        die($e->getMessage());
    }
}



include "../pie.inc";
?>