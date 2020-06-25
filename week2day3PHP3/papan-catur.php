<?php

function papan_catur($angka)
{
    // tulis kode di sini

    $board = '';
    $side = $angka;

    $board .= '<table>';

    $i = 0;
    while ($i < $side) {
        $board .= '<tr>';
        $length = $side * 2 - 1;

        $j = 0;
        while ($j < $length) {
            $isi = '';

            if (($i % 2 == 0 && $j % 2 == 0) || ($i % 2 == 1 && $j % 2 == 1)) {
                $isi = '#';
            } else
                $isi = ' ';
            $board .= '<td>' . $isi . '</td>';

            $j++;
        }

        $i++;
    }
    $board .= '</tr>';
    // Tag Penutup Table
    $board .= '</table><br>';
    return $board;
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
 */

echo papan_catur(5); 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/