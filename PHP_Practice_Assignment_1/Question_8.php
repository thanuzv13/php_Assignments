<?php
echo "Enter first number: ";
$a = trim(fgets(STDIN));

echo "Enter second number: ";
$b = trim(fgets(STDIN));

echo "Before swap: a = $a, b = $b\n";

$temp = $a;
$a = $b;
$b = $temp;

echo "After swap: a = $a, b = $b\n";//eight answer
?>