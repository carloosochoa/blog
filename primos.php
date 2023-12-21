<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números primos</title>
    <link rel="stylesheet" href="css/primos.css">
</head>
<body>
    
    <div class="contenedor">
    <?php
    for($i=1; $i<=100; $i++){
        if(esPrimo($i)){
            echo '<div class="primos">';
            echo '<p>' . $i. '</p>';
        }

        
        else{
            echo '<div class="caja">';
            echo '<p>' . $i. '</p>';
        }
        echo '</div>';
        
    }
    ?>

    <?php
    function esPrimo($num){
        for($i=2; $i < $num; $i++){
            if(($num%$i) == 0){
                return false;
            
        }
    }
    return true;
}
    ?>
    </div>
</body>
</html>