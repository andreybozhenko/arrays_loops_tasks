<?php
/* Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть выбранной вами цифры в
выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза..
*/
$number = 442158755745;
$numberArray = str_split($number);
$count = 0;
foreach ($numberArray as $item) {
    if($item == 5) {
        $count++;
    }
 }
echo "$count";
