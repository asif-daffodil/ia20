<?php
function lepaYear($year)
{
    if (!is_int($year)) {
        return " Input should be a number.";
    } elseif ($year % 4 === 0) {
        if ($year % 100 === 0) {
            if ($year % 400 === 0) {
                return "$year Leap Year";
            } else {
                return " Not a leap year";
            }
        } else {
            return "$year Leap Year";
        }
    } else {
        return "Not Leap Year";
    }
}
echo lepaYear(2004);
