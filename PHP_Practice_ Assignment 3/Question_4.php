<?php
function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyz0123456789";
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, strlen($alphabet)-1);
        $pass = "$pass"."$alphabet[$n]";
    }
    return $pass;
}
echo randomPassword();
?>
