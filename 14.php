<?php
/* Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if проверьте есть ли в массиве
элемент со значением $e, равном 2, 3 или 4. Если есть — выведите на экран 'Есть!', иначе выведите 'Нет!'.
 */
$array = [4, 2, 5, 19, 13, 0, 10];
foreach ($array as $e) {
    if ($e == 2 || $e == 4 || $e == 3) {
        echo "Есть!", "<br />";
    }
    else {
        echo "Нет", "<br />";
    }
}
//как сделать вывод только одного Есть?