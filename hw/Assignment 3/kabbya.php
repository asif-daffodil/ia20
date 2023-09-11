<?php
function leap_year($x)
{
    if (!is_int($x)) {
        return "error: This is not a number.";
    } else {
        if ($x % 4 == 0 || $x % 100 == 0 || $x % 400 == 0) {
            return "$x is Leap Year.";
        } else {
            return "$x is not Leap Year.";
        }
    }
}

echo leap_year("year2");
echo "<br>";
echo leap_year(1900);
