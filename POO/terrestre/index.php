<?php include "cabecera.inc";
include "moto.php";
include "carro.php";
include "bicicleta.php";
ini_set('display_errors',1);
$vehiculos = array();

if(isset($_POST['enviar'])){
    $vehiculo = $_POST["lista"];
}

?>


<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <label for="lista">Selecciona un tipo de vehículo: </label>
    <select name="lista">
        <option value="coche">Coche</option>
        <option value="moto">Moto</option>
        <option value="bicicleta">Bicicleta</option>
    </select>
    <input type="submit" name="enviar" value="Enviar">
</form>
<?php




if(isset($vehiculo)){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
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

if($vehiculo === "coche"){
$vehiculo[] = new Carro($velocidad,$puertas,$encendido,$marca,$modelo);
}elseif($vehiculo === "moto"){
    $vehiculo[] = new Moto($velocidad,$puertas,$encendido,$marca,$modelo);
}else{
    $vehiculo[] = new Bicicleta($velocidad,$encendido,$marca,$modelo);
}




echo "<div class='contenedor'>";
foreach($vehiculos as $vehiculo){

if($vehiculo instanceof Carro || $vehiculo instanceof Moto){

    echo "<p>$vehiculo->marca</p>";
    echo "Marca: $vehiculo->marca<br/>";
    echo "Modelo: $vehiculo->modelo<br/>";
    echo "Encendido: $vehiculo->encendido<br/>";
    echo "Velocidad: $vehiculo->velocidad km/h<br/>";
    echo "Puertas: $vehiculo->numPuertas";
    echo "</div>";

    }elseif($vehiculo instanceof Bicicleta){
        echo "<p>BICI</p>";
        echo "Marca: $vehiculo->marca<br/>";
        echo "Modelo: $vehiculo->modelo<br/>";
        echo "Encendido: $vehiculo->encendido<br/>";
        echo "Velocidad: $vehiculo->velocidad km/h<br/>";
    }
}
echo "</div>";

}

include "pie.inc";
?>

