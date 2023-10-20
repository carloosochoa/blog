<?php include "./cabecera.inc"?>
<?php
$edad = $_REQUEST['comprobar'];

if (empty($edad)){
    header("Location:ej1.php?error=-1");
}else if(!is_numeric($edad)){
    header("Location:ej1.php?error=2");
}else if ($edad<18 || $edad>130){
    header("Location:ej1.php?error=1");
}else{
    echo "<h1>La edad es $edad</h1>";
}

echo "<a href='ej1.php'>Volver</a>";
?>
<?php include "./pie.inc"?>