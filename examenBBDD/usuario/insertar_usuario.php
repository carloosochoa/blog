<?php include "../cabecera.inc";
include_once("../localidad/localidad.php");
include_once("../provincia/provincia.php");
include_once("usuario.php");
include_once("../direnvio/direnvio.php");
ini_set("display_errors",1);
error_reporting(E_ALL);

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
            <th>NOMBRE</th>
            <th>APELLIDOS</th>
            <th>DNI</th>
            <th>TELEFONO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="text" name="email">
                </td>
                <td>
                    <input type="text" name="nombre">
                </td>
                <td>
                    <input type="text" name="apellidos">
                </td>
                <td>
                    <input type="text" name="dni">
                </td>
                <td>
                    <input type="text" name="telefono"> 
                </td>
            </tr>
            <tr class="p-3 mb-2 bg-info text-white">
                <th>CALLE</th>
                <th>
                    CALLE2
                </th>
                <th>
                    CODPOS
                </th>
                <th>
                    PUEBLO
                </th>
                <th>
                    PROVINCIA
                </th>
                <th>NACIDO</th>
            </tr>
            <tr>
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
                </td>
                <td>
                    <input type="date" name="nacido">
                </td>
            </tr>
        </tbody>
    </table>
    


 
    <input type="submit" value="Enviar" class="btn btn-info">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] === "POST"){
    try{
        $u->Insertar($_POST['email'],$_POST['nombre'],$_POST['apellidos'],$_POST['dni'],$_POST['telefono'],$_POST["calle"],$_POST["calle2"],$_POST['codpos'],$_POST['pueblo'],$_POST['provincia']);
        header("Location: visualizar_usuario.php");
        exit();
    }catch(PDOException $e){
        die($e->getMessage());
    }
}



include "../pie.inc";
?>