<?php
function tentukan_deret_geometri($arr)
{
    // kode di sini

    $val = [];

    while (count($arr) < 2) {
        return "true<br>";
    }

    $scan = $arr[1] / $arr[0];

    $i = 0;
    while ($i < count($arr) - 1) {
        $val[$i] = $arr[$i + 1] / $arr[$i];

        while ($scan !== $val[$i]) {
            return "false<br>";
        }
        $i++;
    }
    return "true<br>";
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
