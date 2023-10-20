<?php include "./cabecera.inc"?>
    <?php
    $texto = $_POST["busqueda"];
    $opcion = $_POST["opciones"];
    $lista = $_POST["lista"];

    ?>
    <div class="contenedor">
    <table>
        <tr>
            <th>Busqueda</th>
            <th>Busqueda2</th>
            <th>Tipo</th>
        </tr>
        <tr>
            <td><?= $texto?></td>
            <td><?= $opcion?></td>
            <td><?= $lista?></td>
        </tr>
    </table>
    <button>
        <a href="./ejercicio1.php">Volver</a>
    </button>
    </div>



<?php include "./pie.inc"?>