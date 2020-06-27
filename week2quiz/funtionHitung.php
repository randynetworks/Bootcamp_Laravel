<?php
function hitung($string_data)
{
    // Kode kalian di sini
    $operator = ['*', '+', ':', '%', '-'];
    for ($i = 0; $i < count($operator); $i++) {
        if (strrchr($string_data, $operator[$i])) {
            $cal = explode($operator[$i], $string_data);
            switch ($operator[$i]) {
                case '*':
                    return $cal[0] * $cal[1] . "<br>";

                    break;

                case '+':
                    return $cal[0] + $cal[1] . "<br>" ;

                    break;

                case ':':
                    return $cal[0] / $cal[1] . "<br>" ;

                    break;

                case '%':
                    return $cal[0] % $cal[1] . "<br>" ;

                    break;

                case '-':
                    return $cal[0] - $cal[1] . "<br>" ;

                    break;
            }
        }
    }
}

// TEST CASES
echo hitung("102*2"); //204
echo hitung("2+3"); //5
echo hitung("100:25"); //4
echo hitung("10%2"); //5
echo hitung("99-2"); //97
