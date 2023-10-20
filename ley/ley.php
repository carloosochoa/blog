<?php include "./cabecera.inc"?>
<div class="contenedor">
<form action="nombreyvoto.php" method="post">
    <div class="contenedor1">
    <label for="partidos">Cuantos partidos políticos habrán</label>
    <input type="number" name="partidos" id="partidos"><br>
    </div>
    <div class="contenedor2">
    <label for="escaños">Escaños</label>
    <input type="number" name="escanyos">
    </div>
    <br>
    <br>
    <input type="submit" value="Enviar" class="boton">

</form>
</div>
<?php include "./pie.inc"?>