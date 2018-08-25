<?php

function fibonaci($bla1, $bla2){
    $smt0 = 1;
    $smtr = 0;
    $result = "";

    for ($i=0; $i < $bla2; $i++) { 

        for($j = 0;$j < $bla1;$j++){
            
            if($j == 0 & $i == 0)
                $result .= "0, ";
            else if($j == 1 && $i == 0)
                $result .= "1, ";
            else{
                $result .= ($smtr + $smt0).", ";
                $smtr2 = $smtr;
                $smtr = $smt0;
                $smt0 = $smtr2 + $smt0;
            }
        }
        $result .="<br>";
    }
    return $result;
}

echo fibonaci(4, 3);
?>