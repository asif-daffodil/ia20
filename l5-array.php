<?php  
    // $arr = array("Dhaka", "Rajshahi", "Khulna", "Kuyakata");
    // indexed array

    $cities = ["Dhaka", "Rajshahi", "Khulna", "Kuyakata"];
    // echo $cities[0];
    array_push($cities, "Chadpur", "Gopalganj");
    array_pop($cities);
    array_unshift($cities, "Noyakhali", "Barishal");
    array_shift($cities);
    $alada_array = array_slice($cities, 2, 4);

    $new_arr = ["Chadpur"];

    $rkk = array_diff($alada_array, $new_arr);

    echo "<pre>";
    var_dump($cities);
    echo "</pre>";

    echo "<pre>";
    print_r($cities);
    echo "</pre>";

    echo "<pre>";
    print_r($alada_array);
    echo "</pre>";

    echo "<pre>";
    print_r($rkk);
    echo "</pre>";

    $x = ["Momen", "Mustafiz", "Shariar", "Nurul", "Mery"];

    for ($i=0; $i < count($x); $i++) { 
        echo "$x[$i] <br>";
    }

    foreach ($x as $key => $val) {
        echo ($key+1).": ".$val."<br>";
    }


    //associative array
    $elaka = ["prothom" => "Kalabagan", "ditiyo" => "Kathal Bagan"];
    echo "<pre>";
    print_r($elaka);
    echo "</pre>";

    echo $elaka["ditiyo"]
    //multidimontional array
    
?>