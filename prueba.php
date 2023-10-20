<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
    <link rel="stylesheet" href="./prueba.css">
</head>
<body>
    <div class="contenedor">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo '<div class="caja">';
            echo '<h2>Tabla del ' . $i . '</h2>';
            multiplicar($i);
            echo '</div>';

            // Agrega un salto de fila después de mostrar 2 cajas
            if ($i % 2 == 0) {
                echo '<div class="clearfix"></div>';
            }
        }
        ?>
    </div>

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
