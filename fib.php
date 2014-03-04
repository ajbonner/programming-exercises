<?php

function fib($pos) 
{
    if ($pos < 3) { return $pos; }
    return fib($pos - 1) + fib($pos - 2); 
}

for ($i = 0; $i < 10; $i++) {
    echo fib($i);
}

echo "\n";
