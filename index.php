<?php

declare(strict_types=1);

function multiply(int $a, int $b, ?Closure $callback = null)
{
    $result = $a * $b;
    if ($callback instanceof Closure) {
        $result = $callback($result);
    }

    return $result;
}

$printCallback = function($value) {
    echo "Результат обчислення: $value";
};

echo multiply(5, 10, $printCallback ) . PHP_EOL;