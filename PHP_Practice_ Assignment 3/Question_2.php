<?php

function printEvenNumbers($a, $b) {
    // Ensure a is less than or equal to b
    if ($a > $b) {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }

    

    for ($i = $a; $i <= $b; $i++) {
        if ($i % 2 == 0) {
            echo $i . "<br>";
        }
    }
}
echo "Even numbers between $a and $b are: <br>";
printEvenNumbers(5,20)
?>