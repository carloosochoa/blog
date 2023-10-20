<?php include "./cabecera.inc"?>
<?php
$array=[];
$arrayPrimos = [];

function esPrimo($num){
    for($i=2; $i < $num; $i++){
        if(($num%$i) == 0){
            return false;
        
    }
}
return true;
}

$cont = 0;
for ($i=0;$i<50;$i++){
    $array[] = $i;
}
$x=0;
while($cont <= 10){
    if(esPrimo($array[$x]) && $array[$x]>=2){
        $arrayPrimos[] = $array[$x];
        $cont++;
    }
    $x++;
}
echo '<ol>';
for($i=0; $i<count($arrayPrimos);$i++){
    echo '<li>'. $arrayPrimos[$i].'</li>';
}
echo '</ol>';
?>
<?php include "./pie.inc"?>