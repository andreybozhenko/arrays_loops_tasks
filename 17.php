<?php
/* Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным.
Текущий месяц должен храниться в переменной $month.
*/
$mon_arr = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'November',
    'October',
    'December',];
$month = 'January';
foreach ($mon_arr as $value){
    if ($value == $month)
        echo "<b>$value</b><br />";
    else
        echo $value, "<br>";
}
?>