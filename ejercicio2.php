<?php include "./cabecera.inc" ?>


    <?php
    $array = [];
    $maximo = 0;
    $min = 100;
    $media = 0;
    $suma = 0;
    echo '<ul>';
    for($i = 0;$i<33;$i++){
        $array[] = rand(0,100);
        $suma += $array[$i];
        echo '<li>'. $array[$i]. '</li>';
      
            if($maximo < $array[$i]){
                $maximo = $array[$i];
            }
            if($min > $array[$i]){
                $min = $array[$i];
            }
        
        
    }
    $media = $suma/33;
    
    echo '</ul>';
    echo '<p>El máximo número es: '. $maximo . '</p>';
    echo '<p>El mínimo número es: '. $min . '</p>';
    echo '<p>La media de los números es: '. $media. '</p>';


    
    ?>
<?php include "./pie.inc"?>