<?php
phpinfo();
$color = array("white","green","red","blue","black");
echo "The memory of that scene for me is like a frame of film forever frozen at that moment:
 the " .$color[2]." carpet, the ".$color[1]." lawn, the ".$color[0]." house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
echo "<hr>";
$color = array("White", "Green", "Red");

sort($color);
$arrayLength = count($color);
for($x = 0; $x < $arrayLength; $x++) {
    echo $color[$x];
    echo "<br>";
}
echo "<hr>";
for ($x=1; $x <= 9; $x++){
    echo "$x-";
}
for ($x=10; $x<=10; $x++){
    echo "$x";
}
echo "<hr>";
$text="w3resourse";
$search_char="r";
$count="0";
for ($x="0";$x< strlen($text);$x++){
    if(substr($text,$x,1)==$search_char){
        $count=$count+1;
    }
}
echo "The number of r is";
echo "&nbsp";
echo $count."\n";
echo "<hr>";
$txt = "Hello";
echo "$txt";



