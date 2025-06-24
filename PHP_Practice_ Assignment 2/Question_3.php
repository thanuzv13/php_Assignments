<?php
$num = (int) readline('enter a munber:');
if($num == 0){
    echo "given number is zero";
}
elseif($num <0){
    echo "given number is negative";
}
elseif($num > 0){
    echo "given number is positive";
}
?>