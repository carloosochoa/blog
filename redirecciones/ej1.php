<?php include "./cabecera.inc"?>
<?php
$error= $_REQUEST['error'];
if($error==(-1)){
    echo "Introduce un valor";
}else if($error == 1){
    echo "Introduce un valor válido(18 y 130)";
}else if($error == 2){
    echo "Introduce un número entero";
}
?>
<h1>Formulario</h1>
<div class="contenedor">
<form action="resultado.php" method="post">
<label for="nombre">Escriba su nombre</label>
<input type="text" name="nombre"size="20"><br>
<label for="comprobar">Escriba su edad (entre 18 y 130 años): </label>
<input type="text" name="comprobar" size="4"><br>
<input type="submit" value="Comprueba">
<input type="reset" value="Borrar">
</form>
</div>

<?php include "./pie.inc"?>