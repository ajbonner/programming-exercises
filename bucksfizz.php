<?php

for ($i = 1; $i <= 100; $i++) {
    if ($i % 15 == 0) {
        echo "BucksFizz";
    } else if ($i % 3 == 0) {
        echo "Bucks";
    } else if ($i % 5 == 0) {
        echo "Fizz";
    } else {
        echo $i;
    }
    echo '.';
}

echo "\n";
