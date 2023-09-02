<?php

function number($x, $y)
{
  if (!is_int($x) || !is_int($y)) {
    return "Invalid number probvided <br>";
  }
  $m = $x + $y . "<br>";
  return "$m";
}
echo number(16546545, "Dhaka");
echo number("3", 6);
