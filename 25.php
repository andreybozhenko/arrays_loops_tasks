<?php
/* Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти максимальное и
минимальное значение и поменять их местами.
*/
// не получилось, прошу помочь, не меняет местами...

for ($i = 0; $i <= 8; $i++) {
    $myArray[$i] = rand(1, 30);
}

echo '<pre>';
print_r($myArray);
echo '<pre />';

$maxNumber = max($myArray);
echo "Max number - ", max($myArray), "<br />";
$minNumber = min($myArray);
echo "Min number - ", min($myArray);

//list($myArray[$maxNumber[0]], $myArray[$minNumber[0]]) = $myArray[$minNumber[0]], $array[$maxNumber[0]]);

echo '<pre>';
print_r($myArray);
echo '<pre />';

