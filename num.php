<?php 

$num_neg = -32;

$num_positive = abs($num_neg);

echo $num_positive;

//null coalescing example

$v1 = -21.21;
$v2 = 8;

echo '<br>  INT Val : '.intval(abs($v1)) ?? $v2;

?>