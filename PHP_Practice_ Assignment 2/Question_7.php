<?php
for($num=1;$num<=9;$num++){
    echo "Multiplication Table of $num:\n";
    for($i=1;$i<=9;$i++){
        $result = $num * $i;
        echo "$num x $i=$result\n";
    }
}
?>