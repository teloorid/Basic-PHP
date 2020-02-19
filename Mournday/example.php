<?php
//$a = 2;
//if ($a > 5){
//    echo "a is greater than 5";
//} else if ($a < 5){
//    echo "a is less than 5";
//} else {
//    echo "a is equal to 5";
//}
$a = 37;
$b = 23;
$c = 22;
$d = $a+$b+$c;
echo "Total sum of Maths,English and Kiswahili is $d";
echo "<br>";
echo "  Average of Maths,English and Kiswahili is ".($d/3);
echo "<br>";
$e = $d/3;
if ($e > 60){
    echo "First Division";
} elseif ($e > 50){
    echo "Second Division";
} elseif ($e > 35){
    echo "Third Division";
} else{
    echo "Failed";
}
echo "<hr>";
$favcolor = "purple";
switch ($favcolor){
    case "red":
        echo "Your favourite colour is red!";
        break;
    case "blue":
        echo "Your favourite colour is blue!";
        break;
    case "green":
        echo "Your favourite colour is green!";
        break;
    default:
        echo "Your favourite colour is neither red,blue or green!";
}
echo "<hr>";
$day = 9;
switch ($day){
    case "1":
        echo "Today is Monday";
        break;
    case "2":
        echo "Today is Tuesday";
        break;
    case "3":
        echo "Today is Wednesday";
        break;
    case "4":
        echo "Today is Thursday";
        break;
    case "5":
     echo "Today is Friday";
    break;
    case "6":
        echo "Today is Saturday";
        break;
    case "7":
        echo "Today is Sunday";
        break;
    default:
        echo "That is not an actual day";
}
echo "<hr>";
$x = 1;

while ($x <= 7){
    echo "The number is: $x <br>";
    $x++;
}
echo  "<hr>";
$x = 4;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
echo  "<hr>";

for ($x = 0; $x <= 10; $x++){
    echo "The number is: $x <br>";
}
echo "<hr>";



?>