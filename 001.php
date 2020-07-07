<?php
function check_plaindrome($string) {

    $string = str_replace(' ', '', $string);
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    $string = strtolower($string);
    $reverse = strrev($string);

    if ($string == $reverse) {
        echo "Kalimat palindrome";
    }
    else {
        echo "Bukan kalimat palindrome";
    }

}

echo "Silahkan input string! \n";
$string = trim(fgets(STDIN));
check_plaindrome($string);