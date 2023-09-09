<?php
    function Sum($num1, $num2) {
      
        if (!is_int($num1) || !is_int($num2)) {
            return "Error  Parameter should be a number.";
        } else{
            return $num1 + $num2;
            
        }
    }
    echo Sum(10, 45);
    echo Sum(10, 45);
?>