<?php

function lepaYear($year)
{
    if (!is_int($year)) {
        return "Error Parameter !! Input should be a number.";
    }
    //check  Leap Year
    if (($year % 4 === 0) && ($year % 100 != 0) || $year % 400 === 0) {
        echo "$year is Leap Year";
    } else {
        return "Not Leap Year";
    }
}
echo lepaYear(2021);
