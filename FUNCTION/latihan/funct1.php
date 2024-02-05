<?php 

function calcu($bil1,$operator,$bil2) {
    if ($operator == "+") {
       $hasil = $bil1 + $bil2;
    }
    elseif($operator == "-"){
        $hasil = $bil1 - $bil2;
    }
    elseif($operator == "/"){
        $hasil = $bil1 / $bil2;
    }
    elseif($operator == "x"){
        $hasil = $bil1 * $bil2;
    }
    else {
        echo "Operator tidak sesuai";
    }
    return $hasil;
}
echo calcu(9 ,"x",8);

?>