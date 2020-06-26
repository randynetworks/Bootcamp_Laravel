<?php
function skor_terbesar($arr)
{
  //kode di sini
  $result = [];
  $i = 0;

  while ($i < count($arr)) {
    if ($arr[$i]["nilai"] > 84) {
      $result[$i] = array(
        "<br>" . "nama"  => $arr[$i]['nama'] . "<br>",
        "<br>" . "kelas" => $arr[$i]['kelas'] . "<br>",
        "<br>" . "nilai" => $arr[$i]['nilai'] . "<br>"
      );
    }

    // usort($arr, function ($item1, $item2) {
    //   return $item2['nilai'] <=> $item1['nilai'];
    // });
    $i++;
    $nilai = array();
    foreach ($arr as $key => $row) {
      $nilai[$key - 1] = $row['nilai'];
    }
    array_multisort($nilai, SORT_ASC, $arr);
  }


  return $result;
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
