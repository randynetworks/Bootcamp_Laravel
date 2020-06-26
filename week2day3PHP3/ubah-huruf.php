<?php
function ubah_huruf($string)
{
    //kode di sini
    $i = 0;
    while ($i < strlen($string)) {
        $string[$i] = chr(ord($string[$i]) + 1);
        $i++;
    }
    return $string . "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu
