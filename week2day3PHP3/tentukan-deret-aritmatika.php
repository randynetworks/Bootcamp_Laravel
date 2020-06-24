<?php
function tentukan_deret_aritmatika($arr)
{
    // kode di sini
    $val = [];

    while (count($arr) < 2) {
        return "Hasilnya : true<br>";
    }

    $scan = $arr[1] - $arr[0];

    $i = 0;
    while ($i < count($arr) - 1) {
        $val[$i] = $arr[$i + 1] - $arr[$i];

        while ($scan !== $val[$i]) {
            return "Hasilnya : false<br>";
        }
        $i++;
    }

    return "Hasilnya : true<br>";
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]); // true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]); // false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]); // false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
