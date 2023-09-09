<?php  

    function Addnumbers ($a, $b) {
      
        if (!is_int($a) || !is_int($b)) {
            return "Error: Parameter should be a number.";
        }
            return $a + $b;
    
    }
    
    echo Addnumbers (2000, 5000)."<br>";
    echo Addnumbers ("10days","5days");


 ?>


















