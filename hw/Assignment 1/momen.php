<?php
function sum($a, $b)
{

    if (is_int($a) && is_int($b)) {

        $sum = $a + $b;
        return $sum . "<br>";
    } else {

        $sum = "Please Enter Number Like (0 - 9)";
        return $sum . "<br>";
    }
}

echo sum(1, 9);
echo sum(1, "9");
