<?php
function tukar_besar_kecil($string)
{
    //kode di sini
    $i = 0;
    while ($i < strlen($string)) {
        $valAscii = ord($string[$i]);
        if ($valAscii >= 65 && $valAscii <= 90) {
            $string[$i] = chr($valAscii + 32);
        }
        if ($valAscii >= 97 && $valAscii <= 122) {
            $string[$i] = chr($valAscii - 32);
        }

        $i++;
    }
    return "$string<br>";
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"
