<?php
$age = 5;
if ($age > 30) {
    echo "Joy Bangla";
} elseif ($age > 10) {
    echo "Amar Bangladesh";
} elseif ($age != 5) {
    echo "Amader Bangladesh";
} else {
    echo "Dhaka";
}

/**
 * age <= 12 you are a baby
 * age <= 19 you are a teenager
 * age <= 29 you are a young person
 * age <= 49 you are a middle aged person
 * age > 50 && age < 150 you are an old person
 * else you are not on this world 
 */
echo "<br>";
$city = "Noyakhali";

switch ($city) {
    case 'Noyakhali':
        echo "Noakhali bivag chai";
        break;

    case 'Barishal':
        echo "Barishale one nodi ase";
        break;

    case 'Dhaka':
        echo "Dhaka is the cpital of Bangladesh";
        break;

    default:
        echo "Please input valid city";
        break;
}

echo "<br>";

$sub = "Java";
/* if($sub === "PHP"){
        echo "We are php developer";
    }else{
        echo "We are not a php developer";
    } */
echo $sub === "PHP" ? "We are php developer" : ($sub === "JavaScript" ? "We are JS developer" : "We are not a developer");

/*

    condition ? true:false

    */

/**
 * $name = "";
 * $name == "Asif"
 */
echo "<br>";

function person($fname = "Sakib", $lname = "Khan")
{
    return "$fname $lname";
}

echo person("Momen", "Uddin") . "<br>";
echo person("Mostafizur", "Rahman") . "<br>";
echo person() . "<br>";
echo person("Bubly") . "<br>";
echo person(lname: "All Hasan") . "<br>";

/**
 * make a function
 * function takes two perameter
 * function will validate that the values of all perameters are integer
 * function will return a error message if the values are not number
 * if all the values are number, function will return the sum of those number
 */

function number($x, $y)
{
    if (!is_int($x) || !is_int($y)) {
        return "Invalid number probvided <br>";
    }
    $m = $x + $y . "<br>";
    return "$m";
}


// recursive function
function factorial($n)
{
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}
echo factorial(5);
