<?php include "./cabecera.inc"?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="numero">Tabla de multiplicar: </label><br>
        <input type="number" name="numero" id="numero">
        <input type="submit" value="Enviar">
    </form>
<?php
if(isset($_REQUEST['numero'])){
    $num = $_REQUEST['numero'];
    echo '<table>';
    echo '<tr> <td colspan="5">Tabla del '. $num.'</td></tr>';

    echo '<tr>';
    for($i=1;$i<=5;$i++){
        
        echo '<td>'. $num . "*".$i . " = ". $num*$i.'</td>';
        
    }
    echo '</tr>';
    echo '<tr>';
    for($i=6;$i<=10;$i++){
        
        echo '<td>'. $num . "*".$i . " = ". $num*$i.'</td>';
        
    }
    echo '</tr>';

    echo '</table>';
}
        
        
?>

<?php include "./pie.inc"?>