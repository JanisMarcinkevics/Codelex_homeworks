<?php

$values = [10, 7, 5, 1.5, "string"];

for ($i = 0; $i < count($values); $i++) {
    if (is_int($values[$i])) {
        echo $values[$i] * 2 . "\n";
    }
}

