<?php
ini_set('display_errors',1);
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['imagen'])){
    $imagen = $_FILES['imagen'];
    $rutaArchivo = "archivo.txt";
    $fp = fopen("archivo.txt","w");
    
    //imagen que queremos leer (hay que tener gd.lib instalada y activa)
    $img = imagecreatefrompng($imagen['tmp_name']);
    
    //Obtenemos el tamaño 
    $width = imagesx($img); //ancho
    $height = imagesy($img); //alto
    $escala = 10;

    $newWidth = $width/$escala;
    $newHeight = $height/$escala;
 

    for($y = 0; $y < $newHeight; $y++) {
        for($x = 0; $x < $newWidth; $x++) {
            $rgb = imagecolorat($img, $x*$escala, $y*$escala);
            
            //Valor de las componentes RGB de cada pixel
            $red = $rgb >> 16;
            $green = $rgb >> 8 & 255;
            $blue = $rgb & 255;

            //Elegir el caracter según la luminosidad del pixel y escribir en el fichero
            $luminosidad = (0.299 * $red + 0.587 * $green + 0.114 * $blue) / 255;
            $indice = ($luminosidad > 0.5) ? " " : "+";
            fwrite($fp, $indice);
        }
        fwrite($fp, PHP_EOL);
    }
    fclose($fp);
    // ob_start(); //Almaceno la salida
    // //Contenid en pantalla
    // echo file_get_contents($rutaArchivo);
    // $contenido = ob_get_clean(); //Obtengo el contenido y lo limpio
    // header('Content-Type: application/octet-stream');
    // header("Content-Transfer-Encoding: Binary");
    // header("Content-disposition: attachment; filename=archivo.txt");
    // echo $contenido;
    header("Location: archivo.txt");

    exit;

}    
?>
