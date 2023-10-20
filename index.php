<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primera página con PHP</title>
    <link rel="stylesheet" href="./index.css">
    
</head>

<body>
    <?php
    //declaro variables
    $nombre = "Carlos Ochoa";
    $anyo = 2003;
    $radio= 3.5;
    define('PI',3.14159); #declaro una constante
    $area = 2 * PI * $radio;
    $texto = "El area del círculo con radio ". $radio . " es " . $area;

    ?>
    <h1>Página de prueba de PHP</h1>
    <div class="main-container">
        <div class="hijo">
            <p>Hola mi nombre es <?= $nombre ?> y nací en el año <?= $anyo ?></p>
        </div>

        <div class="hijo">
            <p><?= $texto ?></p> 
        </div>

    
    </div>
    <div class="lol">
        <p>
            <?php
            for($i=1; $i<= 100; $i++){
                if($i===100){
                    echo $i;
                }
                elseif($i%2===0 ){
                    echo "<b>$i</b>". ", ";
                }
                
                else{echo $i. ", ";}
                
            }
            ?>
        <p>
    </div>
    <div>
        <p>
            <?php
            $num= 10;
            while($num>=0){
                echo $num%2===0 ? "<b>$num</b>" : $num;
                echo $num === 0 ? " " : ", ";
                $num--;
                
            }
            ?>
        </p>
    </div>
</body>
</html>