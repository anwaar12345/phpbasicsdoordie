<?php

$var = 's';
$VAR = 1;

function add(){
	global $var; 
	global $VAR;

return "$var $VAR";

}
	
echo add();
echo "<hr> static keyword <hr>";
 function exampleStatic()
{
   static $i  = 0;
   echo $i;
   $i++; 
}
exampleStatic();
exampleStatic();
exampleStatic();

echo "<br> global variable array holds <br>";

$x = 1;
$y = 3;

function gexample()
{
    echo $GLOBALS['x'].$GLOBALS['y'];
}
gexample();

echo "<br>";
echo gmdate("D/m/y");
?>