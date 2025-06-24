<?php
$alp = (string) readline('enter a alphabet: ');
if(($alp == "a") || ($alp == "e") || ($alp == "i") ||($alp == "o") || ($alp == "u")){
    echo "the given alphabet is vowel";
}
else{
    echo "the given alphabet is consonant";
}
?>