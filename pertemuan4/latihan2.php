<?php
// NESTED LOOP / LOOPING BERSARANG / LOOPING DI DALAM LOOPING
for ($i = 8; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$i ";
    }
    echo "<br>";
}
