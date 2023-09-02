<?php

declare(strict_types=1);
function number($a, $b)
{
    if (!is_int($a) || !is_int($b)) {
        return "Invalid number probvided <br>";
    }
    return $a + $b . "<br>";
}

echo number(2, 2);
echo number(2, "2");
