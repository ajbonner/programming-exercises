<?php

function factorial($num)
{
    if ($num == 0) {
        return 1;
    }

    return $num * factorial($num -1);
}

for ($i = 1; $i < 11 ; $i++) {
    echo "Factorial of $i is " . factorial($i) . "\n";
}
