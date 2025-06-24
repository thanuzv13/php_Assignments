<?php
function revese($str){
    $len = strlen($str);
    $reversed = "";
    for($i=$len-1;$i>=0;$i--){
        $let = $str[$i];
        $reversed = $reversed.$let;
    }
    echo "orginal string is: $str </br>";
    echo "reversed string is: $reversed";
}
revese("thanuz");
?>