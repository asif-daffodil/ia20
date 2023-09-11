<?php
date_default_timezone_set("Asia/Dhaka");
echo date("d-m-y h:i:s a D") . "<br>";
echo date("d/M/Y H:i:s A l") . "<br>";
echo date("d/F/Y H:i:s A l") . "<br>";

//mktime(hour, minute, second, month, day, year)

$bday = mktime(0, 0, 0, 3, 26, 2024);
echo date("d/M/Y l", $bday) . "<br>";

//strtotime
$today = strtotime("+10 years +5 months +10 days");
echo date("d/M/Y l", $today) . "<br>";

$nextFriday = strtotime("next friday");
$endDate = strtotime("+6 weeks", $nextFriday);
while ($nextFriday <= $endDate) {
    echo date("d/M/Y l", $nextFriday) . "<br>";
    $nextFriday = strtotime("+1 week", $nextFriday);
}

$str = "The quick brown fox jumps over the lazy dog";
echo strlen($str) . "<br>";
echo str_word_count($str) . "<br>";
echo strrev($str) . "<br>";
echo strpos($str, "fox") . "<br>";
echo str_replace("fox", "cat", $str) . "<br>";
echo str_repeat($str, 5) . "<br>";
echo strtoupper($str) . "<br>";
echo strtolower($str) . "<br>";
echo ucfirst($str) . "<br>";
echo ucwords($str) . "<br>";

//explode
$fruits = "mango banana apple orange pineapple";
$fruitList = explode(" ", $fruits);
echo "<pre>";
print_r($fruitList);
echo "</pre>";

//implode
$fruitList = ["mango", "banana", "apple", "orange", "pineapple"];
$fruits = implode(" ", $fruitList);
echo $fruits . "<br>";

// $_GET[]
/* echo $_GET["city"] . "<br>";
echo $_GET["gender"] . "<br>"; */

// $_SERVER
echo $_SERVER["SERVER_NAME"] . $_SERVER["PHP_SELF"] . "<br>";

?>

<a href="<?= $_SERVER["PHP_SELF"] . '?c=bd' ?>">
    <button>Bangladesh</button>
</a>
<a href="<?= $_SERVER["PHP_SELF"] . '?c=in' ?>">
    <button>India</button>
</a>
<br><br>
<?php
if (isset($_GET["c"])) {
    if ($_GET["c"] == "bd") {
        echo "Bangladesh";
    } else if ($_GET["c"] == "in") {
        echo "India";
    }
}
?>