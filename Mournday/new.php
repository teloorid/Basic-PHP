<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}
echo "<hr>";
$people = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
foreach ($people as $x => $val){
    echo "$x => $val <br>";
}
echo "<hr>";
$car = array("volvo", "BMW", "Toyota");
echo "I like ".$car[0].",".$car[1]." and".$car[2].".";
echo "<hr>";
$cars = array("volvo","BMW","Toyota","Chevrolet","Chrysler");
echo count($cars);
echo "<br>";
$arrayLength = count($cars);

for($x = 0; $x < $arrayLength; $x++){

    echo $cars[$x];
    echo "<br>";
}
echo "<hr>";
$fruits = array("banana", "apple","lemon","melon","orange");
echo "I love ".$fruits[1].".";
echo "<br>";
echo "<hr>";
$age = array("Peter" => "22", "Xavier" => "37");
arsort($age);
foreach($age as $x => $value){
    echo "Key=".$x.",Value=".$value;
    echo "<br>";
}
echo "<hr>";
$define = array("banana" => "fruit", "kales" => "vegetables", "meat" => "protein");
krsort($define);
foreach($define as $x => $value){
    echo "Key=".$x.",Value=".$value;
    echo "<br>";
}
echo "<hr>";
$cars = array(
    array("Volvo",32,18),array("BMW",15,13),array("Saab",5,2));

echo $cars[0][0].":In stock:".$cars[0][1].",Sold:".$cars[0][2].".<br>";
echo $cars[1][0].":In stock:".$cars[1][1].",Sold:".$cars[1][2].".<br>";
echo $cars[2][0].":In stock:".$cars[2][1].",Sold:".$cars[2][2].".<br>";
for ($row = 0; $row < 3; $row++){
    echo "<p><b>row number $row</b></p>";
    echo "<ul>";

    for ($col = 0; $col < 3; $col++){
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}
echo "<hr>";
$cars = array("volvo","BMW","Toyota","Chevrolet","Chrysler");
sort($cars);
$numbers = array(4,6,2,22,11);
sort($numbers);
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
$arrayLength = count($cars);
for($x = 0; $x < $arrayLength; $x++){
    echo $cars[$x];
    echo "<br>";
}

?>
