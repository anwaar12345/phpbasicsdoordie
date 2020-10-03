<?php 
$arr = [2,1,4,3];
$temp = '';
for($i = 0; $i < count($arr); $i++){
    
for($j = 0; $j < count($arr) -1; $j++){
    if($arr[$j] > $arr[$j+1]){
        $temp = $arr[$j];
        $arr[$j] = $arr[$j+1];
        $arr[$j+1] = $temp;
    }
}

}
foreach($arr as $a){

    echo $a.',';
}


?>