<?php include "./cabecera.inc"?>
<?php
$numeroPartidos = $_REQUEST["partidos"];
$numeroEscanyos = $_REQUEST["escanyos"];
echo "<form action='fin.php' method='post'>";
echo '<div class="contenedor">';
echo '<div class="parti">';

for($i=0;$i<$numeroPartidos;$i++){
    echo "<label for='nombre" .$i. "'>Nombre: </label>";
    echo "<input type='text' name='nombre" .$i. "' id='nombre".$i."'</input><br>";
}
echo '</div>';
echo '<div class="escan">';
for($i=0;$i<$numeroPartidos;$i++){
    echo "<label for='voto" .$i. "'>Votos: </label>";
    echo "<input type='text' name='voto" .$i. "' id='voto".$i."'</input><br>";
}

echo '</div>';
echo '<input type="submit" value="Enviar" class="env">';
echo '</div>';
echo '<input type="hidden" name="escanyos" value="'.$numeroEscanyos.'">';
echo '<input type="hidden" name="partidos" value="'.$numeroPartidos.'">';
echo "</form>";
?>
<?php include "./pie.inc"?>