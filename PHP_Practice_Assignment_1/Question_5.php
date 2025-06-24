<?php
echo "Enter a number: ";
$number = trim(fgets(STDIN)); // Take input from user
$square = $number * $number;
echo "The square of $number is $square.\n";
?>