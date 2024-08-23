









<?php

function processStrings($strings) {
    foreach ($strings as $string) {

        $vowelCount = preg_match_all('/[aeiouAEIOU]/', $string);


        $reversedString = strrev($string);

        echo "Original String: $string\n";
        echo "Reversed String: $reversedString\n";
        echo "Vowel Count: $vowelCount\n\n";
    }
}

$strings = ["Hello", "World", "PHP", "Programming"];

processStrings($strings);


















?>
