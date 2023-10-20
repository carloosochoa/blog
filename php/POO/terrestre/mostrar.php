<?php include "./cabecera.inc";
include "./moto.php";
include "./carro.php";
include "./bicicleta.php";


$vehiculos[] = new Carro(0,5,false,"Ford","Mustang");
$vehiculos[] = new Carro(0,5,false, "Golf", "GTI");
$vehiculos[] = new Moto(0,0,false,"MOTO","CBR 100 RR Fireblade 2010");
$vehiculos[] = new Bicicleta(0,false,"BICICLETA","K710 Kool Chain");


foreach($vehiculos as $vehiculo){
    if($vehiculo instanceof Carro || $vehiculo instanceof Moto){
        echo "<p>--------OTRAS CARACTERISTICAS DE UN $vehiculo->marca $vehiculo->modelo--------</p>";
        echo "$vehiculo->modelo " . $vehiculo->encender();
        $vehiculo->aumentarVelocidad(50);
        echo $vehiculo->modelo . " corriendo a " . $vehiculo->velocidad . " km";
        echo "<br/>";
        echo $vehiculo->pasarBache();
        echo "<br/>";
        $vehiculo->disminuirVelocidad(35);
        echo $vehiculo->modelo . " corriendo a " . $vehiculo->velocidad . " km";
        echo "<br/>";
        $vehiculo->disminuirVelocidad(5);
        echo $vehiculo->modelo . " corriendo a " . $vehiculo->velocidad . " km";
        echo "<br/>";
        $vehiculo->disminuirVelocidad(5);
        echo $vehiculo->modelo . " corriendo a " . $vehiculo->velocidad . " km";
        echo "<br/>";
        $vehiculo->disminuirVelocidad(5);
        echo $vehiculo->modelo . " corriendo a " . $vehiculo->velocidad . " km";
        echo "<br/>";
        echo $vehiculo->frenar();
        echo "<br/>";
        echo "$vehiculo->modelo " . $vehiculo->apagar();


    }elseif ($vehiculo instanceof Bicicleta){
        echo "<p>--------OTRAS CARACTERISTICAS DE UNA $vehiculo->marca $vehiculo->modelo--------</p>";
        echo $vehiculo->apedalear();
        echo "<br/>";
        $vehiculo->aumentarVelocidad(50);
        echo $vehiculo->modelo . " corriendo a " . $vehiculo->velocidad . " km";
        echo "<br/>";
        echo $vehiculo->pasarBache();
        echo "<br/>";
        $vehiculo->disminuirVelocidad(35);
        echo $vehiculo->modelo . " corriendo a " . $vehiculo->velocidad . " km";
        echo "<br/>";
        $vehiculo->disminuirVelocidad(5);
        echo $vehiculo->modelo . " corriendo a " . $vehiculo->velocidad . " km";
        echo "<br/>";
        $vehiculo->disminuirVelocidad(5);
        echo $vehiculo->modelo . " corriendo a " . $vehiculo->velocidad . " km";
        echo "<br/>";
        $vehiculo->disminuirVelocidad(5);
        echo $vehiculo->modelo . " corriendo a " . $vehiculo->velocidad . " km";
        echo "<br/>";
        echo $vehiculo->dejarDePedalear();
    }
}





include "./pie.inc";
?>