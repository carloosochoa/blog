<?php 
include "./cabecera.inc";
include_once("clases/vendedor.php");
ini_set("display_errors",1);
$v = new Vendedor();
$vendedores = $v->Listar();
?>

<h2 class="bg-dark text-white" id="h2prof">Vendedor</h2>

<table class="table table-striped">
    <thead class="p-3 mb-2 bg-info text-white">
        <tr>
            <th>NUMVEND</th>
            <th>NOMVEND</th>
            <th>NOMBRECOMER</th>
            <th>TELEFONO</th>
            <th>CALLE</th>
            <th>CIUDAD</th>
            <th>PROVINCIA</th>
            <th>ACCIONES</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($vendedores as $vendedor) {
            ?>
            <tr>
                <td><?php echo $vendedor["numvend"];?></td>
                <td><?php echo $vendedor["nomvend"];?></td>
                <td><?php echo $vendedor["nombrecomer"];?></td>
                <td><?php echo $vendedor['telefono'];?></td>
                <td><?php echo $vendedor['calle'];?></td>
                <td><?php echo $vendedor['ciudad'];?></td>
                <td><?php echo $vendedor['provincia'];?></td>

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