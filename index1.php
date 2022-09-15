<?php

/**
 * Menghitung banyak karkter yang sama 
 * 
 * Output STRING  : a2b2ck3ml
 * Output STRING1 : a4b2sd2f2h2ck3ml
 */
const STRING  = "aabbckkkml";
const STRING1 = "aaaabsdfbhckkhfdkml";

// 

$str1 = STRING;
$str2 = STRING1;

function hitungBanyakKarakterYangSama($str) {
    $result = "";
    for ($i = 0; $i < strlen($str); $i++) {
        $result .= $str[$i];
        $charCount = substr_count($str, $str[$i]);
        if ($charCount > 1) {
            $result .= $charCount;
        }
    }
    //
    for ($k = 0; $k < strlen($result); $k++) {
        if (is_numeric($result[$k])) {
            $result = str_replace($result[$k], "", $result);
        }
    }
    //
    $stringParts = str_split($result);
    sort($stringParts);
    $str = implode($stringParts);
    //
    $result = "";
    for ($i = 0; $i < strlen($str); $i++) {
        $result .= $str[$i];
        $charCount = substr_count($str, $str[$i]);
        if ($charCount > 1) {
            $result .= $charCount;
            $i += $charCount - 1;
        }
    }
    echo $result;
}

// str 1
echo "str 1 : $str1<br>";
echo "Hasil: ";
hitungBanyakKarakterYangSama($str1);

echo "<br><br>";

// str 2
echo "str 2 : $str2<br>";
echo "Hasil: ";
hitungBanyakKarakterYangSama($str2);
