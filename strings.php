<?php

$str = 'aws/is/a/cloud/Platform/diagnostics/s   space';
// $arr = explode('/',$str);
// echo str_word_count($str);
// echo "<br/> string Built In php Functions <br/>";
// $ae = [1,2];
// if($ae !== []){
//     echo '1e';
// }
if(strpos($str,'diagnostics') != null){
    $strmatch = strpos($str,'diagnostic');
   echo substr($str,$strmatch,-3);
   echo "<br>".substr_count($str,' ');
}

$str_get = substr($str,strpos($str,' '));
echo '<br>'.$str_get;
echo substr_count($str,' ').'<br>';

$float = 2.22;

$int = (int)$float;

var_dump($int);
 echo $int;
// print_r($arr);
?>