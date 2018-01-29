<?php
/* Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом.
Текущий день должен храниться в переменной $day.
*/
$week_arr = [
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday',];
$day = 'Sunday';
foreach ($week_arr as $value){
    if ($value == $day)
        echo "<i>$day</i><br />";
    else
        echo $value, "<br>";
}
?>