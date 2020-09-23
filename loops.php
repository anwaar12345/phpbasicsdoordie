<?php 

$var = 0;

while($var <=  5){
    echo "$var <hr>";
    $var++;
}

echo "<hr> Do While <hr>";

$x = 0;

do{
echo $x."<br>";
$x++;
}while($x <= 5);

echo "<hr>";

function exam(&$val)
{
 return $val +=5;
}
$v = 1;
echo exam($v);




?>