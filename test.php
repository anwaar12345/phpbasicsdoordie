<?php
/*
strings:
str_word_count()
strrev()
strlen()
strripos() ending position
strpos()
strtoupper()
ucfirst()
ucwords()
substr_count()
substr()

Arrays:
array_filter()
array_map()
array_unique()
array_push()
array_pop()
array_unshift()
array_shift()
sort()
ksort()
krsort()
asort()
array_merge()

manipulation of variable
type cast:
(datatype:int)variable:$x
intval() -> change to int
abs() positive to negative

*/

$var = 'str str1 str2 str3 shah';
echo strtoupper($var).ucwords($var).ucfirst($var);

$arr = explode(' ',$var);

print_r($arr);
$varreplace = str_replace(' ','_',$var);
echo "<br> Replaced: ".$varreplace."<hr>";
echo str_word_count($var);
echo '<br> Length: '.strlen($var);
echo strrev($var);
echo "<hr>";
echo "<hr>".strchr($var,'str3')."<hr>";

$var_get = substr($var,strripos($var,'shah'));
echo $var_get.'<hr>';

echo substr_count($var,' ').'array : ';

// Array Test

$array1 = [1,-11,-1.2,3.1,1,2,2];
$array_get = array_map(function($arr){
    return abs((int)$arr);
},$array1);
foreach(array_unique($array_get) as $arr1){
    echo $arr1.'<hr>';
}
echo '<br>';
echo var_dump(array_merge($array1,$array_get));

$even = array_filter($array1,fn($v) => $v % 2 == 0 );
echo "<hr><pre>";
echo  print_r($even);
echo "</pre>";


$tests = [
    'name' => 'syed anwar shah',
    'age' => 25
];
echo "<hr>";

echo var_dump(array_change_key_case($tests,CASE_UPPER));

foreach($tests as $key => $test){
    echo $key.':'.$test.'<br>';
}

echo "<br>";
class Helpers{
    protected function agecheck($data = NULL){
            if($data >= 21 ){
             return true;
            }
             return false;
       }
}

class Generalhelpers extends Helpers{

    public function age($age)
    {
        return $this->agecheck();
    }

}
$generalhelp = new Generalhelpers();
echo $generalhelp->age(21) ? 'Allowed' : 'Forbidden access';
?> 