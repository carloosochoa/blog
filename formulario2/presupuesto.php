<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="./presupuesto.css">
</head>
<body>
<?php
$presupuesto = array(
    array("INFORMÁTICA",500),
    array("LENGUA",300),
    array("MATEMÁTICAS",300),
    array("INGLÉS",400)
);
$lista = $_REQUEST["lista"];
?>
<table>
    <tr>
        <td class="oscuro">ASIGNATURA</td>
        <td class="oscuro">PRESUPUESTO</td>
    </tr>
    <tr>
        <td><?=$presupuesto[$lista][0]?></td>
        <td><?=$presupuesto[$lista][1]?></td>
    </tr>
</table>
<button>
    <a href="./ejercicio2.php">Volver</a>
</button>
</body>
</html>