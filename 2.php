<?php
/* Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива.
Запишите ее в переменную $result.
 */
$result = 0;
$array = [1, 20, 15, 17, 24, 35];
foreach ($array as $value) {
    $result += $value;
}
echo $result;

