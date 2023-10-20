<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coches</title>
</head>
<body>
    <h1 class="titu">Coches</h1>
    <div>
    <?php
    $coches =   array(
            "1234JCD" =>array(
                                "marca"=>"hyundai",
                                "modelo" => "i30 N",
                                "puertas" =>5
            ),
            "1456JBG"=> array(
                                "marca"=>"ford", 
                                "modelo" =>"focus",
                                "puertas" => 5
            ),
            "4020KOP"=> array(
                                "marca"=>"renault", 
                                "modelo" =>"megane",
                                "puertas" => 3
            ),
            "1994CXM" =>array(
                                "marca"=>"peugeot", 
                                "modelo" =>"308",
                                "puertas" => 4
            )
        );
    foreach($coches as $matricula =>$coche){
        echo "Matricula :". $matricula . " - Marca: ".$coche["marca"]. "</br>";
    }


    
    ?>
</div>
</body>
</html>