<?php
echo "Enter your first name: ";
$first = trim(fgets(STDIN));

echo "Enter your last name: ";
$last = trim(fgets(STDIN));

$fullName = $first . " " . $last;
echo "Your full name is: $fullName\n";//sixth answer
?>