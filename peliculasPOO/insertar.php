<?php include "cabecera2.inc";
include_once("peliculas.php");
ini_set('display_errors',1);
?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
    <table class="table table-striped">
        <thead class="p-3 mb-2 bg-info text-white">
            <tr>
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
                <input type="text" name="titulo">
            </td>
            <td>
                <input type="text" name="genero">
            </td>
            <td>
                <input type="number" name="any">
            </td>
            <td>
                <input type="decimal" name="precio">
            </td>
            <td>
                <div class="custom-file">
                <input type="file" class="custom-file-input" id="file-upload" name="imagen">
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

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $titulo = $_REQUEST['titulo'];
    $genero = $_REQUEST['genero'];
    $anyo = $_REQUEST['any'];
    $precio = $_REQUEST['precio'];
    $img = $_FILES['imagen'];
    
    try{
        $p = new Peliculas();
        $ruta = $p->subir_archivo($img);
        $p->Insertar($titulo,$genero,$anyo,$precio,$ruta);
        header("Location: index.php");
        exit();
        
    }catch(PDOException $e){
        die($e->getMessage());
    }
        
    }



include "./pie.inc"?>