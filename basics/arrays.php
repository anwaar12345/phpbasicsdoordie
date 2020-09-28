<?php 

$str = "Element1 Element2 Element3";
$arr = explode(' ',$str);
echo var_dump($arr);
echo '<br>'.implode(' ',$arr).'<br><hr>';
$arrays = [1,2,2,2,-31,1];

$arr_positive = array_map(function($arr1)
{
 return abs($arr1);
},$arrays);

echo var_dump(sort($arr_positive));

foreach(array_unique($arr_positive) as $arr1){
echo '<br>'.$arr1.'<br>';
}

$arrr = ['a'];
array_push($arrr,'b');
echo "<hr><pre>";
var_dump($arrr);
echo "</pre>";
array_pop($arrr);
echo "<hr><pre>";
var_dump($arrr);
echo "</pre>";
array_unshift($arrr,'a1');
echo "<hr><pre>";
var_dump($arrr);
array_shift($arrr);
echo "</pre>";
echo "<hr><pre>";
var_dump($arrr);
echo "</pre>";
echo "<hr>";
$ser = ['Apple','Nokia','Samsung','Huawei'];
if(in_array('Apple',$ser)){
    echo array_search("Apple",$ser);
}

$strS = 'shah/diagnostics';
echo substr_count($strS,'h');
$ae = substr($strS,stripos($strS,'diagnostics'));
echo $ae;
?>