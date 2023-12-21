<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
    <link rel="stylesheet" href="css/tabla_multiplicar.css">
</head>
<body>
    <div class="contenedor">
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo '<div class="caja">';
                echo '<h2>Tabla del ' . $i . '</h2>';
                multiplicar($i);
                echo '</div>';
            }
            ?>

    <?php
    function multiplicar($numero) {
        for ($i = 1; $i <= 10; $i++) {
            $result = $numero * $i;
            echo '<p>' . $i . ' * ' . $numero . ' = ' . $result . '</p>';
        }
    }
    ?>
</body>
</html>
