<?php
/* Вывести таблицу умножения с помощью двух циклов for
 */
for ($a = 1; $a < 10; $a++) {
    for ($b = 1; $b < 10; $b++) {
        $res = $a * $b;
        echo "$a * $b = $res <br/>";
    }
    echo "<br />";
}