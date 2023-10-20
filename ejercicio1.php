<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="css/ejercicio1.css">
</head>
<body>
    <?php
    $array = [];
    
    echo '<ul>';
    for ($i = 0;$i<50;$i++){
        $array[] = rand(0,50);
        echo '<li>'. $array[$i]. '</li>';
    }
    echo '</ul>';
    ?>
    <ul>
    </ul>
</body>
</html>