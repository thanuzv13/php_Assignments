<?php
echo "Enter a string: ";
$input = trim(fgets(STDIN));

// Removes all whitespace (spaces, tabs, newlines)
$noWhitespace = preg_replace('/\s+/', '', $input);

echo "String without whitespaces: $noWhitespace\n";//ninth answer

?>