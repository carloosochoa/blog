<?php include "./cabecera.inc"?>
<?php
$nombrePartido = [];
$votos = [];
for($i=0;$i<$_REQUEST['partidos'];$i++){
$nombrePartido[] = $_REQUEST['nombre'.$i];
$votos[] = $_REQUEST['voto'.$i];
$mayor = [];
}
for($i=0;$i<$_REQUEST['escanyos'];$i++){
    for($j=0;$j<count($nombrePartido);$j++){
        $array[] = round($votos[$j]/($i+1),0);
        
    }

}
rsort($array);
$ochoMayores = array_slice($array,0,$_REQUEST['escanyos']);

echo '<div class="contenedor_tabla">';
echo '<table border="1px black solid">';
echo '<tr><td>    </td>'; //espacio en blanco

for($i=0;$i<count($nombrePartido);$i++){
    echo "<td>$nombrePartido[$i]</td>";//Saco la primera fila con los nombres
}echo '</tr>';
for($i=0;$i<$_REQUEST['escanyos'];$i++){
    echo '<tr><td>Escaños ' . $i+1 .'</td>';//Columna escaños
    for($j=0;$j<count($nombrePartido);$j++){
        $valor = round($votos[$j]/($i+1),0);
        if(in_array($valor,$ochoMayores)){
    echo '<td style="background-color:coral;">';//votos por partido y segun el escaño
        }else{
            echo '<td>';
        }
        echo $valor . '</td>';
    }
    echo '</tr>';
}


echo '</table>';
echo '</div>';


?>
<?php include "./pie.inc"?>
