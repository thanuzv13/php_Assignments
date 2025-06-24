<?php
function maxNumber($a,$b,$c){
    $max;
    if($a>$b && $a>$c){
        $max = $a;
    }
    elseif($b>$a && $b>$c){
        $max = $b;
    }
    else{
        $max = $c;
    }
    echo $max;
}
maxNumber(10,50,30);
?>