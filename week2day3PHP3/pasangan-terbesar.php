<?php
function pasangan_terbesar($angka)
{
    // kode di sini
    $len = strlen($angka);
    $coup = [];
    $i = 0;
    while ($i < $len) {
        $coup[$i] = substr($angka, $i, 2);
        $i++;
    }
    return "pasangan terbesar : " . max($coup) . "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99
