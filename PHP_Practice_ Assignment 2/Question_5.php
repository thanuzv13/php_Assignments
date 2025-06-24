<?php
$num = (int) readline("enter a natural number");
if($num <= 0){
    echo "enter a valid natural number";
}
else{
    echo ((($num)*($num + 1))/2);
}
?>