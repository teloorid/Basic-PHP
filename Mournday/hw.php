<?php declare(strict_types=1);

function writeMsg(){
    echo "Hello World";
}

writeMsg();
echo "<hr>";
function familyName($fname,$year){
    echo "$fname Igadwa.Born in $year <br>";
}
familyName("Debi","2002");
familyName("Silver","1996");
familyName("Daisy","1994");
familyName("Beatrice","1964");
familyName("Jossy","1962");
echo "<hr>";


function addNumbers(int $a, int $b){
    return $a+$b;
}
echo addNumber(5, 5);

function setHeight(int $minheight = 50){
    echo "The height is :$minheight <br>";
}
setHeight(350);
setHeight();
setHeight(135);
setHeight(80);

function sum(int $x, int $y){
    $z = $x + $y;
    return $z;
}

echo "5+10=".sum(5,10)."<br>";
echo "7+13=".sum(7,13)."<br>";
echo "2+4=".sum(5,10)."<br>";
function writeMsg(){
    echo "Hello World";
}
writeMsg();