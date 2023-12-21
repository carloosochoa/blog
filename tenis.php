<?php include "./cabecera.inc"?>
<?php
     $jugadores=[0,0];
     $puntos = [0,15,30,40];
     $juegos = [0,0];
     $indices = [0,0];

     function gana(){
        return rand(0,1);
     }

     while($juegos[0] != 6 && $juegos[1] != 6){
        $terminada = false;
        do{
            
            if(gana()){
                $indices[1]++;
                $jugadores[1] = $puntos[$indices[1]];
                $mostrar1 .= '<td>'. $jugadores[1] .'</td>';

            } else{
                $indices[0]++;
                $jugadores[0] = $puntos[$indices[0]];
                $mostrar0 .= '<td>'. $jugadores[1] .'</td>';
            }

            if ($jugadores[0] == 40){
                $juegos[0]++;
                $mostrarJuegos0 .= '<td>'. $juegos[0] . '</td>';
                $terminada = true;
            } elseif ($jugadores[1] == 40){
                $juegos[1]++;
                $mostrarJuegos1 .= '<td>'. $juegos[1] . '</td>';
                $terminada = true;
            }
        } while (!$terminada);
        $jugadores[0] = 0;
        $jugadores[1] = 0;  
        $indices[0] = 0;
        $indices[1] = 0;
        if($juegos[0]!=6 && $juegos[1]!=6){
            $mostrar0 = "";
            $mostrar1 = "";
        }         
    }
    
?>
<table border=1px solid>

<tr>
    <th>Nadal</th>
    <td><?=$mostrar1?></td>
</tr>
<tr>
    <th>Federer</th>
    <td><?=$mostrar0?></td>
</tr>
</table>

<table border=1px solid>
    
    <tr>
        <th>Nadal</th>
        <td><?=$mostrarJuegos1?></td>
    </tr>
    <tr>
        <th>Federer</th>
        <td><?=$mostrarJuegos0?></td>
    </tr>
</table>

<?php include "./pie.inc"?>