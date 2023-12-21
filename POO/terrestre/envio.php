<?php include "cabecera.inc";
include "moto.php";
include "carro.php";
include "bicicleta.php";

$vehiculo = $_REQUEST["lista"];


if(isset($vehiculo)){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="velocidad">Velocidad:</label>
    <input type="number" size="6" name="velocidad">
    <br>
    <label for="puertas">Numero de puertas: </label>
    <input type="number" name="puertas" size="6">
    <br>
    <label for="encendido">Encendido</label>
    <select name="encendido" id="encendido">
        <option value="si">Si</option>
        <option value="no">No</option>
    </select>
    <br>
    <label for="marca">Marca:</label>
    <input type="text" name="marca">
    <br>
    <label for="modelo">Modelo:</label>
    <input type="text" name="modelo">
    <br>
    <input type="submit" name="datos" value="Enviar">
    </form>

<?php

}


if(isset($_REQUEST['datos'])){
$velocidad = $_REQUEST['velocidad'];
$encendido = $_REQUEST['encendido'];
$puertas = $_REQUEST['puertas'];
$marca = $_REQUEST['marca'];
$modelo = $_REQUEST['modelo'];


$coche = new Carro($velocidad,$puertas,$encendido,$marca,$modelo);



echo "<div class='contenedor'>";
if($coche instanceof Carro){

    echo '<p>COCHE</p>';
    echo "Marca: $coche->marca<br/>";
    echo "Modelo: $coche->modelo<br/>";
    echo "Encendido: $coche->encendido<br/>";
    echo "Velocidad: $coche->velocidad<br/>";
    echo "Puertas: $coche->numPuertas";
    echo "</div>";

    }
}
include "pie.inc";
?>