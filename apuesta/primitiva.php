<?php include "./cabecera.inc"?>
<div class="contenedor">
        <header>
            <h1>Apuestas</h1>
        </header>
        <main>
        <?php
        echo 'Primitiva';
        function aleatorio(){
            return rand(1,49);
        }
        $array = [];
        $coincidencia = true;
        do{
            for($i=0;$i<6;$i++){
                $array[] = aleatorio();
                for($j=0;$j<6;$j++){
                    if($array[$i]===$array[$j]){
                        $coincidencia = true;
                        $array[$i] = aleatorio();

                    }else $coincidencia = false; 
                }

            }
        }while($coincidencia);
        print_r($array);
        ?>
        </main>
        <footer>2023 Apuestas del Estado</footer>
    </div>





<?php include "./pie.inc"?>
