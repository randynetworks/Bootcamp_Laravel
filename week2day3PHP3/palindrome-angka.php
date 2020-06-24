<?php

function palindrome_angka($angka)
{
  // tulis kode di sini

  $angka++;
  while ($angka != strrev($angka)) {
    $i = 1;
    while ($i < $angka) {
      $angka++;
      while ($angka == strrev($angka)) {
        return $angka . "<br>";
        break;
      }
      $i++;
    }
  }
  return $angka . "<br>";
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001
