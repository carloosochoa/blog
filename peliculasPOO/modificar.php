<?php include "cabecera2.inc";
include_once("peliculas.php");
if($_SERVER['REQUEST_METHOD']==='GET'){

    $array = [$_GET['id'],$_GET['Titulo'],$_GET['Genero'],$_GET['Any'],$_GET['Precio'],$_GET['imagen']];
    ?>
<form action="controlador_modificar.php" method="POST" enctype="multipart/form-data">
    <table class="table table-striped">
        <thead class="p-3 mb-2 bg-info text-white">
            <tr>
            <th>ID</th>
            <th>TITULO</th>
            <th>GENERO</th>
            <th>AÑO</th>
            <th>PRECIO</th>
            <th>IMAGEN</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>
                <input type="number" name="id" value="<?=$array[0]?>">
            </td>
            <td>
                <input type="text" name="titulo" value="<?=$array[1]?>">
            </td>
            <td>
                <input type="text" name="genero" value="<?=$array[2]?>">
            </td>
            <td>
                <input type="number" name="any" value="<?=$array[3]?>">
            </td>
            <td>
                <input type="decimal" name="precio" value="<?=$array[4]?>">
            </td>
            <td>
                <div class="custom-file">
                <input type="file" class="custom-file-input" id="file-upload" name="imagen" value="<?=$array[5]?>">
                <label for="file-upload">Seleccionar</label>    
            </div>
            </td>
            </tr>
            <tr>
                <td colspan="4">
                <input type="submit" class="btn btn-success" value="Enviar" name="enviado" id="enviar">
                </td>
            </tr>
        </tbody>
    </table>     
           
</form>
<?php 
}


include "./pie.inc"?>