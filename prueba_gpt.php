<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $jugador1Juegos = 0;
    $jugador2Juegos = 0;
    $partidoFinalizado = false;
    $resultadosJuegos = [];
    
    function determinarGanadorPartido($juegosJugador1, $juegosJugador2) {
        if ($juegosJugador1 == 6 && $juegosJugador2 <= 4) {
            return "Jugador 1";
        } elseif ($juegosJugador2 == 6 && $juegosJugador1 <= 4) {
            return "Jugador 2";
        } elseif ($juegosJugador1 == 7 && $juegosJugador2 == 5) {
            return "Jugador 1";
        } elseif ($juegosJugador2 == 7 && $juegosJugador1 == 5) {
            return "Jugador 2";
        }
        return null;
    }
    
    while (!$partidoFinalizado) {
        $jugador1Puntos = 0;
        $jugador2Puntos = 0;
    
        while (true) {
            // Simular puntos ganados en el juego actual (aquí puedes usar algún método para simular el progreso del juego)
            $puntoAleatorio = rand(1, 2);
            if ($puntoAleatorio === 1) {
                $jugador1Puntos++;
            } else {
                $jugador2Puntos++;
            }
    
            // Mostrar el marcador del juego actual
            mostrarMarcadorJuego($jugador1Puntos, $jugador2Puntos);
            echo ", ";
    
            // Verificar si el juego ha terminado
            $ganadorJuego = determinarGanadorJuego($jugador1Puntos, $jugador2Puntos);
            if ($ganadorJuego) {
                $resultadosJuegos[] = "$jugador1Puntos-$jugador2Puntos";
                break;
            }
        }
    
        // Actualizar el marcador de juegos
        if ($ganadorJuego === "Jugador 1") {
            $jugador1Juegos++;
        } elseif ($ganadorJuego === "Jugador 2") {
            $jugador2Juegos++;
        }
    
        // Verificar si el partido ha terminado
        $ganadorPartido = determinarGanadorPartido($jugador1Juegos, $jugador2Juegos);
        if ($ganadorPartido) {
            $partidoFinalizado = true;
        }
    }
    
    // Mostrar el marcador final del partido
    echo "$jugador1Juegos-$jugador2Juegos (";
    echo implode(", ", $resultadosJuegos);
    echo ")";
    
    ?>
</body>
</html>