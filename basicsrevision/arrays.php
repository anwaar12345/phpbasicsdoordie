<?php 

$arr = [];
$arr1 = ['Hp','Dell','sony ericson','samsong'];
$i = 0;
foreach($arr1 as $value){
    $arr[$i]['company'] = $value;
    $arr[$i]['Year'] = date('Y');
    $i++;
}

if(!empty($arr)){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
$found = " "; 
for ($i=0; $i < count($arr); $i++) { 
    if(in_array("Dell",$arr[$i])){
        echo "Found on :".$i."<br>";
        $found = implode(' ',$arr[$i]);
    }

}

echo substr($found,strpos($found,'Dell'),4);
?>