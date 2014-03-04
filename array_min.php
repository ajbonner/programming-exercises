<?php

$array = array(3, 4, 100, 914.1, 3.3, 3, 914, 1.1, 10, 0, 45);

$min = 0;

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] <= $min) {
        $min = $array[$i];
    }
}

echo 'The smallest number found in array [' . implode(', ', $array) . "] is '$min'\n";
