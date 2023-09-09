<?php 
    // assosiative array
    $chandpur = ["bs" => "boro station", "cs" => "choto station", "nb" => "nou bondor"];
    echo "<h3>".$chandpur["nb"]."</h3>";

    foreach($chandpur as $mirpur){
        echo "$mirpur<br>";
    }

    //multi daimontional array
    
    $students = [
        ["Momen", "Keranigank", 22],
        ["Nurul", "Munshiganj", 21],
        ["Shuvo", "Noyakhali", 23]
    ];

    echo "<pre>";
    print_r($students);
    echo "</pre>";

    echo "<pre>";
    print_r($students[1]);
    echo "</pre>";

    echo $students[2][1]."<br>";


    for ($i=0; $i < count($students); $i++) { 
        for ($j=0; $j < count($students[$i]); $j++) { 
            echo $students[$i][$j]." ";
        }
        echo "<br>";
    }

    foreach ($students as $value) {
        foreach ($value as $alue) {
            echo $alue. " ";
        }
        echo "<br>";
    }
    ?>

    