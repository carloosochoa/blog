<?php 
include "../cabecera.inc";
include_once("peliculas.php");
$p = new Peliculas();
$peliculas= $p->Listar();
?>
<h2 class="bg-dark text-white" id="h2prof">Peliculas</h2>
<table class="table table-striped">
    <thead class="p-3 mb-2 bg-info text-white">
        <tr>
            <th>ID</th>
            <th>TITULO</th>
            <th>GENERO</th>
            <th>AÑO</th>
            <th>PRECIO</th>
            <th>IMAGEN</th>
            <th>ACCIONES</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($peliculas as $pelicula) {
            ?>
            <tr>
                <td><?php echo $pelicula["id"];?></td>
                <td><?php echo $pelicula["Titulo"];?></td>
                <td><?php echo $pelicula["Genero"];?></td>
                <td><?php echo $pelicula['Any'];?></td>
                <td><?php echo $pelicula['Precio'];?></td>
                <td><?php echo $pelicula['imagen'];?></td>

                <td>
                    <a href="modificar.php?id=<?php echo $pelicula['id']; ?>&Titulo=<?php echo $pelicula['Titulo']; ?>&Genero=<?php echo $pelicula['Genero']; ?>&Any=<?php echo $pelicula['Any']; ?>&Precio=<?php echo $pelicula['Precio']; ?>&imagen=<?php echo $pelicula['imagen']; ?>" class="btn btn-primary">Modificar</a>
                    <a href="borrar.php?id=<?php echo $pelicula['id']; ?>" class="btn btn-danger">Borrar</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>  

</table>

<?php include "../pie.inc"?>
