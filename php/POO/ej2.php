<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TV</title>
</head>
<body>
    <?php
    include "./tv.php";
    $tv = new TV("Panasonic");
    $tv->cambiarCanal(4);
    $tv->cambiarVolumen(10);
    $tv->informacion();
    $tv->reiniciarTV();
    $tv->informacion();
    $tv->cambiarCanal(34);
    $tv->cambiarVolumen(50);
    $tv->informacion();



    ?>
</body>
</html>