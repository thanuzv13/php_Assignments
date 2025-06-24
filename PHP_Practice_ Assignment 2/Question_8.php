<?php
$numa = (int) readline("enter first number:");
$numb = (int) readline("enter second number:");
$ope = (string) readline("enter operater:");
switch ($ope){
    case "+":
        $result = $numa + $numb;
        echo "$numa + $numb = $result";
        break;
    case "-":
        $result = $numa - $numb;
        echo "$numa - $numb = $result";
        break;
    case "*":
        $result = $numa * $numb;
        echo "$numa * $numb = $result";
        break;
    case "/":
        if($numb==0){
            echo "Cannot divide by zero.\n";
        }else{
            $result = $numa / $numb;
            echo "$numa / $numb = $result";
            
        }
        break;
    default:
    echo "Invalid operator. Use +, -, *, or /.\n";
}
?>