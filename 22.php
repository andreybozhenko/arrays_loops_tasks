<?php
/* Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.

xx
xxxx
xxxxxx
xxxxxxxx
xxxxxxxxxx
*/
$block = 'xx';
$row = $block;
$i = 0;
while ($i < 5) {
    echo "$row<br />";
    $row .= $block;
    $i++;
}