<?php
/* Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого
массива. Результат запишите переменную $result.
 */
$result = 0;
$array = [26, 17, 136, 12, 79, 15];
foreach ($array as $value) {
    $result += $value ** 2;
}
echo $result;

