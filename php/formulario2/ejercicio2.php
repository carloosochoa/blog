<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="./ejercicio2.css">
</head>
<body>
<div class="cont">
<form action="presupuesto.php" method="post">
    <label for="lista">Departamento: </label><br>
    <select name="lista" id="lista">
        <option value="0">INFORMÁTICA</option>
        <option value="1">LENGUA</option>
        <option value="2">MATEMÁTICAS</option>
        <option value="3">INGLÉS</option>
    </select>
    <input type="submit" value="Enviar">
</form>
</div>
<?php include "./pie.inc"?>
</body>
</html>