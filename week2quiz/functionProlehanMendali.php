<?php

/**
 * CONTOH:
 * perolehan_medali(
 *  array(
 *    array('Indonesia', 'emas'),
 *    array('India', 'perak'),
 *    array('Korea Selatan', 'emas' ),
 *    array('India', 'perak'),
 *    array('India', 'emas'),
 *    array('Indonesia', 'perak'),
 *    array('Indonesia', 'emas'),
 *  )
 * );
 *
 * output:
 * Array(
 *    Array (
 *      [negara] => 'Indonesia'
 *      [emas] => 2
 *      [perak] => 1
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'India'
 *      [emas] => 1
 *      [perak] => 2
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'Korea Selatan'
 *      [emas] => 1
 *      [perak] => 0
 *      [perunggu] => 0
 *    )
 * )
 *
 *
 */

function perolehan_medali($arr)
{
    // Kode kamu di sini
}


// TEST CASES
print_r(perolehan_medali(
    array(
        array('Indonesia', 'emas'),
        array('India', 'perak'),
        array('Korea Selatan', 'emas'),
        array('India', 'perak'),
        array('India', 'emas'),
        array('Indonesia', 'perak'),
        array('Indonesia', 'emas')
    )
));
/**
 * output:
 * Array(
 *    Array (
 *      [negara] => 'Indonesia'
 *      [emas] => 2
 *      [perak] => 1
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'India'
 *      [emas] => 1
 *      [perak] => 2
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'Korea Selatan'
 *      [emas] => 1
 *      [perak] => 0
 *      [perunggu] => 0
 *    )
 * )
 */

print_r(perolehan_medali([])); // no data