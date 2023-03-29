<?php
//Trojan Bogacki 3pir
    $licznik = 0;
    $licznik2 = 0;
    $tab= array(
        array(rand(0,1), rand(0,1), rand(0,1) ,rand(0,1)),
        array(rand(0,1), rand(0,1) ,rand(0,1) ,rand(0,1)),
        array(rand(0,1), rand(0,1), rand(0,1), rand(0,1)),
        array(rand(0,1), rand(0,1), rand(0,1), rand(0,1))
    );

    echo "<p>STWORZONA TABLICA</p>";

    for($i = 0; $i<4;$i++){
        for($j = 0; $j<4;$j++){
            $licznik+=$tab[$i][$j];
            echo " ";
            echo $tab[$i][$j];
        }
        echo "LICZNIK: $licznik";
        $licznik = 0;
        if($licznik>=$licznik2) $licznik2=$licznik;
        $licznik = 0;
        echo "<br>";
    }

    echo "LICZNIK2: $licznik2";

    echo "<p>WIERSZE Z NAJWIEKSZĄ SUMĄ</p>";

        for($i = 0; $i<4;$i++){
            $licznik = 0;
            for($j = 0; $j<4;$j++){
                $licznik+=$tab[$i][$j];
            }
            if($licznik==$licznik2)
                for($k = 0; $k<4;$k++){
                    echo " ";
                    echo $tab[$i][$k];
                }
            echo "<br>";
        }

    echo "<p>OBRÓCONA TABLICA</p>";

    for($i = 3; $i>=0;$i--){
        for($j = 3;$j>=3;$j--){
            echo " ";
            echo $tab[$i][$j];
        }
        echo "<br>";
    }


?>