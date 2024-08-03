<?php
    function JugarMus(){
        echo "<u>J U E G O   D E L   M U S</u>";
        $cartas = [
            [
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-espadas-1-minimalart.png",                        
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-espadas-2-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-espadas-3-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-espadas-4-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-espadas-5-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-espadas-6-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-espadas-7-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-espadas-10-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-espadas-11-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-espadas-12-minimalart.png"
            ],
            [
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-oros-1-minimalart.png",                        
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-oros-2-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-oros-3-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-oros-4-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-oros-5-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-oros-6-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-oros-7-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-oros-10-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-oros-11-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-oros-12-minimalart.png"
            ],
            [
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-copas-1-minimalart.png",                        
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-copas-2-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-copas-3-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-copas-4-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-copas-5-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-copas-6-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-copas-7-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-copas-10-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-copas-11-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-copas-12-minimalart.png"
            ],
            [
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-bastos-1-minimalart.png",                        
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-bastos-2-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-bastos-3-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-bastos-4-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-bastos-5-min.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-bastos-6-min.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-bastos-7-min.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-bastos-10-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-bastos-11-minimalart.png",
                "https://web.archive.org/web/20231203065510im_/https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-bastos-12-minimalart.png"
            ]
        ];
        $contGrandJug1 = [];
        $contGrandJug2=[]; 
        $cartaGrandeGanadora1="";
        $cartaGrandeGanadora2="";
        $separar1="";
        $separar2="";
        $valorJug1=[];                
        $valorJug2=[];
        $cartasValor1=[];
        $cartasValor2=[];

        echo "<br>JUGADOR 1  ";
        //COGE el valor (12,11,10,7,6...) de la carta para mostrar y calcular valor, a través de la dirección web de dodne cogemos las cartas
        for($i=0;$i < 4;$i++){                
            for($j=0;$j < 4;$j++){
                //Coge carta de forma aleatoria para luego mostrarla
                $jugador1[$i][$j] = $cartas[rand(0,3)][rand(0,9)];

                //Coge valor de la carta recortando(substr) la dirección y cogiendo el número
                if(str_contains(substr($jugador1[0][$j],-9,2),"-")){ //Buscamos que contenga - porque al coger dos cifras si lleva - significa que es un solo número y 
                                                                     //no dos
                    $valorJug1[$j] = substr($jugador1[0][$j],-9,1);  //Recortamos la - para coger solo el valor al ser una sola cifra
                }
                else if(str_contains(substr($jugador1[0][$j],-17,2),"-")){ //Cogemos la posición 0 como si cogemos otra posición, pero de ese modo buscamos en una única
                                                                           //fila, nos da igual el palo solo nos vale el valor
                    $valorJug1[$j] = substr($jugador1[0][$j],-16,1);
                }
                else{
                    $valorJug1[$j] = substr($jugador1[0][$j],-17,2);
                }
            }
        }
        //MOSTRAR el DIBUJO de las CARTAS
        for($i=0;$i < 1;$i++){                
            for($j=0;$j < count($jugador1);$j++){
                echo "<img src='".$jugador1[$i][$j]."' width='180px'>";
            }
        }

        echo "<br>JUGADOR 2  ";

        for($i=0;$i < 4;$i++){   
            for($j=0;$j < 4;$j++){
                $jugador2[$i][$j] = $cartas[rand(0,3)][rand(0,9)];
                if(str_contains(substr($jugador2[0][$j],-9,2),"-")){
                    $valorJug2[$j] = substr($jugador2[0][$j],-9,1);
                }
                else if(str_contains(substr($jugador2[0][$j],-17,2),"-")){
                    $valorJug2[$j] = substr($jugador2[0][$j],-16,1);
                }
                else{
                    $valorJug2[$j] = substr($jugador2[0][$j],-17,2);
                }
            }
        }

        for($i=0;$i < 1;$i++){                
            for($j=0;$j < count($jugador2);$j++){
                echo "<img src='".$jugador2[$i][$j]."' width='180px'>";
            }
        }

        echo "<br>";

        $cartasValor1 = ["12"=>0,"11"=>0,"10"=>0,"7"=>0,"6"=>0,"5"=>0,"4"=>0,"3"=>0,"2"=>0,"1"=>0];                
        foreach ($valorJug1 as $valor) {
            $cartasValor1[$valor] += 1;
        }
        //print_r($cartasValor1);

        $cartasValor2 = ["12"=>0,"11"=>0,"10"=>0,"7"=>0,"6"=>0,"5"=>0,"4"=>0,"3"=>0,"2"=>0,"1"=>0];
        foreach ($valorJug2 as $valor) {
            $cartasValor2[$valor] += 1;
        }
        //print_r($cartasValor2);

        //Mandamos con parámetro a las funciones de las jugadas
        JugarGrande($cartasValor1, $cartasValor2);                
        JugarChica($cartasValor1, $cartasValor2);
        JugarPares($cartasValor1,$cartasValor2);
        JuegoTotal($valorJug1,$valorJug2);
    }

    function JugarGrande($cartasValor1,$cartasValor2){

        echo "<br><u id='grande'>PARTIDA GRANDE</u>:   ";
        $orden = ["3/12","11","10","7","6","5","4","2","1"];                 
        $grande1 = ["3/12"=>0,"11"=>0,"10"=>0,"7"=>0,"6"=>0,"5"=>0,"4"=>0,"2"=>0,"1"=>0];       
        $grande2 = ["3/12"=>0,"11"=>0,"10"=>0,"7"=>0,"6"=>0,"5"=>0,"4"=>0,"2"=>0,"1"=>0];  
        $salir = FALSE;

        //Pasamos a un nuevo array cambiando la posición del 3 al principio junto con el 10 para que cuente igual y coja como 1º valor
        foreach ($cartasValor1 as $key => $cantidad) {
            if(($key=="3" || $key=="12") && $cantidad > 0) $grande1["3/12"] += $cantidad;
            else if($cantidad > 0) $grande1[$key] = $cantidad;
        }

        foreach ($cartasValor2 as $key => $cantidad) {
            if(($key=="3" || $key=="12") && $cantidad > 0) $grande2["3/12"] += $cantidad;
            else if($cantidad > 0) $grande2[$key] = $cantidad;
        }

        foreach ($orden as $valor) {
            if (($grande1[$valor] > 0) && ($grande2[$valor] > 0) && $grande1[$valor] == $grande2[$valor] && !$salir){

                echo "Ha llegado a empate con la carta $valor con la cantidad de $grande1[$valor], pero se desempata:   "; 
                    if($grande1[$valor] > $grande2[$valor] && !$salir){
                        echo "Gana el \"JUGADOR 1\" con la carta $valor con $grande1[$valor]"; 
                        $salir = true;
                    }
                    else if ($grande2[$valor] > $grande1[$valor] && !$salir){
                        echo "Gana el \"JUGADOR 2\" con la carta $valor con $grande2[$valor]";
                        $salir = true;
                    }
            }
            if($grande1[$valor] > $grande2[$valor] && !$salir){
                echo "Gana el \"JUGADOR 1\" con la carta $valor con $grande1[$valor]"; 
                $salir = true;
            }
            else if ($grande2[$valor] > $grande1[$valor] && !$salir){
                echo "Gana el \"JUGADOR 2\" con la carta $valor con $grande2[$valor]";
                $salir = true;
            }
        }

    }

    function JugarChica($cartasValor1,$cartasValor2){

        echo "<br><br><u id='chica'>PARTIDA CHICA</u>:  ";
        $orden = ["1","2","4","5","6","7","10","11","3/12"];                 
        $peque1 = ["1"=>0,"2"=>0,"4"=>0,"5"=>0,"6"=>0,"7"=>0,"10"=>0,"11"=>0,"3/12"=>0];       
        $peque2 = ["1"=>0,"2"=>0,"4"=>0,"5"=>0,"6"=>0,"7"=>0,"10"=>0,"11"=>0,"3/12"=>0];  
        $salir = FALSE;

        //Pasamos a un nuevo array cambiando la posición del 3 al principio junto con el 10 para que cuente igual y coja como 1º valor
        foreach ($cartasValor1 as $key => $cantidad) {
            if(($key=="3" || $key=="12") && $cantidad > 0) $peque1["3/12"] += $cantidad;
            else if($cantidad > 0) $peque1[$key] = $cantidad;
        }

        foreach ($cartasValor2 as $key => $cantidad) {
            if(($key=="3" || $key=="12") && $cantidad > 0) $peque2["3/12"] += $cantidad;
            else if($cantidad > 0) $peque2[$key] = $cantidad;
        }

        foreach ($orden as $valor) {
            if (($peque1[$valor] > 0) && ($peque2[$valor] > 0) && $peque1[$valor] == $peque2[$valor] && !$salir){

                echo "Ha llegado a empate con la carta $valor con la cantidad de $peque1[$valor], pero se desempata:   "; 
                    if($peque1[$valor] > $peque2[$valor] && !$salir){
                        echo "Gana el \"JUGADOR 1\" con la carta $valor con $peque1[$valor]"; 
                        $salir = true;
                    }
                    else if ($peque2[$valor] > $peque1[$valor] && !$salir){
                        echo "Gana el \"JUGADOR 2\" con la carta $valor con $peque2[$valor]";
                        $salir = true;
                    }
            }
            if($peque1[$valor] > $peque2[$valor] && !$salir){
                echo "Gana el \"JUGADOR 1\" con la carta $valor con $peque1[$valor]"; 
                $salir = true;
            }
            else if ($peque2[$valor] > $peque1[$valor] && !$salir){
                echo "Gana el \"JUGADOR 2\" con la carta $valor con $peque2[$valor]";
                $salir = true;
            }
        }
    }

    function JugarPares($cartasValor1, $cartasValor2) {
        echo "<br><br><u id='pares'>PARTIDA PARES</u>:   ";
        $orden = ["3/12" => 0, "11" => 0, "10" => 0, "7" => 0, "6" => 0, "5" => 0, "4" => 0, "2" => 0, "1" => 0];                 
        $pares1 = ["3/12" => 0, "11" => 0, "10" => 0, "7" => 0, "6" => 0, "5" => 0, "4" => 0, "2" => 0, "1" => 0];       
        $pares2 = ["3/12" => 0, "11" => 0, "10" => 0, "7" => 0, "6" => 0, "5" => 0, "4" => 0, "2" => 0, "1" => 0];  
        $salir = FALSE;
        $info = "";
        $dos1 = 0;
        $dos2 = 0;

        foreach ($cartasValor1 as $key => $cantidad) {
            if (($key == "3" || $key == "12") && $cantidad > 0) $pares1["3/12"] += $cantidad;
            else if ($cantidad > 0) $pares1[$key] = $cantidad;
        }
        foreach ($cartasValor2 as $key => $cantidad) {
            if (($key == "3" || $key == "12") && $cantidad > 0) $pares2["3/12"] += $cantidad;
            else if ($cantidad > 0) $pares2[$key] = $cantidad;
        }

        // Ordenamos los arrays en orden descendente según la cantidad de cartas
        arsort($pares1);
        arsort($pares2);

        $indice1 = array_keys($pares1, 2);                            
        $indice2 = array_keys($pares2, 2);

        foreach ($indice1 as $in1) $dos1++;

        foreach ($indice2 as $in2) $dos2++;

        foreach ($orden as $key => $cantidad) {
            if ((($pares1[$key] == 4) || ($pares2[$key] == 4)) && !$salir) {
                if ($pares1[$key] > $pares2[$key]) {
                    $info = "Gana el \"JUGADOR 1\" con la carta $key con $pares1[$key] cartas<br>";
                    $salir = true;
                } else if ($pares2[$key] > $pares1[$key]) {
                    $info = "Gana el \"JUGADOR 2\" con la carta $key con $pares2[$key] cartas<br>";
                    $salir = true;
                } else {
                    $info = "Ha llegado a empate con la carta $key con la cantidad de $pares1[$key] cartas<br>"; 
                    $salir = true;
                }
            } else if ((($pares1[$key] == 3) || ($pares2[$key] == 3)) && !$salir) {
                if ($pares1[$key] > $pares2[$key]) {
                    $info = "Gana el \"JUGADOR 1\" con MEDIAS de la carta $key con $pares1[$key] cartas<br>";
                    $salir = true;
                } else if ($pares2[$key] > $pares1[$key]) {
                    $info = "Gana el \"JUGADOR 2\" con MEDIAS de la carta $key con $pares2[$key] cartas<br>";
                    $salir = true;
                } else {
                    $info = "Ha llegado a empate con MEDIAS de la carta $key con la cantidad de $pares1[$key] cartas<br>";
                    $salir = true;
                }
            } else if ((($pares1[$key] == 2) || ($pares2[$key] == 2))) {

                if (($pares1[$key] == 2) && ($pares2[$key] == 2) && !$salir) {

                    if($dos1 == 2 && $dos2 == 2){
                        $info = "Empate con 2 PARES de cartas<br>";
                        $salir = true;
                    }
                    else{
                        if($dos1 == 2){
                            $info = "Empate en par pero gana el \"JUGADOR 1\" por tener 2 pares<br>";
                        }
                        else if($dos2 == 2){
                            $info = "Empate en par pero gana el \"JUGADOR 2\" por tener 2 pares<br>";
                        }
                        else{
                            $info = "Empate con 1 PAR de carta del $key<br>";
                        }
                        $salir = true;
                    }
                } else if (($pares1[$key] == 2) && !$salir) {
                    if($dos1 == 2){
                        $info = "Gana el \"JUGADOR 1\" con 2 PARES de cartas<br>";
                        $salir = true;
                    } else {
                        $info = "Gana el \"JUGADOR 1\" con PAR de la carta $key<br>";
                        $salir = true;
                    }
                } else if (($pares2[$key] == 2) && !$salir) {
                    if($dos2 == 2){
                        $info = "Gana el \"JUGADOR 2\" con 2 PARES de cartas<br>";
                        $salir = true;
                    } else {
                        $info = "Gana el \"JUGADOR 2\" con PAR de la carta $key<br>"; 
                        $salir = true;
                    }
                }
            }
        }
        if ($salir) {
            echo $info;
        } else {
            echo "NINGUNO gana, ya que no hay ni PAR, ni MEDIAS ni DUPLES<br>";
        }
    }

    function JuegoTotal($valorJug1,$valorJug2){

        echo "<br><u id='total'>PARTIDA JUEGO</u>:   ";
        $puntuacion = [31,32,40,39,38,37,36,35,34,33];     
        $juego1 = 0;       
        $juego2 = 0;  
        $info ="";

        foreach ($valorJug1 as $cantidad) {
            if (($cantidad == "3" || $cantidad == "12" || $cantidad == "11" || $cantidad == "10")) $juego1 += 10;
            else $juego1 += (int)$cantidad;
        }

        foreach ($valorJug2 as $cantidad) {
            if (($cantidad == "3" || $cantidad == "12" || $cantidad == "11" || $cantidad == "10")) $juego2 += 10;
            else $juego2 += (int)$cantidad;
        }

        for($i=0; $i<count($puntuacion); $i++){
            if($juego1 > 30 || $juego2 > 30){
                if($juego1 == $puntuacion[$i] && $juego2 == $puntuacion[$i]){
                    $info = "Empate por tener ambos $puntuacion[$i] de puntuación";
                }
                else if($juego1 == $puntuacion[$i]){
                    $info = "Ha ganado el Jugador 1 al conseguir $puntuacion[$i] puntos"; 
                }
                else if($juego2 == $puntuacion[$i])
                {
                    $info = "Ha ganado el Jugador 2 al conseguir $puntuacion[$i] puntos";
                }
            }
            else{
                $info = "No tiene juego";
            }
        }
        echo $info;
    }

    JugarMus();


