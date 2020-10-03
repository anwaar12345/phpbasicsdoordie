<?php
 function missing_array($arr)
{
    $my_array = range(min($arr),max($arr));
    return array_diff($my_array,$arr);
}
echo "<pre>"; 
print_r(missing_array([0,10,11]));
echo "</pre><hr/>";

 class NoChild{
    public function greetings()
    {
        return "<h3> Assalam O Alaikum </h3>";
    }
} 
class Child extends NoChild{


} 

$obj =  new Child();
echo $obj->greetings();

?>