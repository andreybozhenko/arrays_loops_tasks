<?php
/* Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число
получится? Посчитайте количество итераций, необходимых для этого (итерации — это количество проходов цикла)
и запишите его в переменную $num.
 */
for ($n = 1000, $num = 0; $n >= 50; $n = $n / 2, $num++) ;
echo $n, " - результат последнего деления <br />";
echo $num, " - количество итераций";

?>