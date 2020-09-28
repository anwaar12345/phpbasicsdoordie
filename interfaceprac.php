<?php 
interface Vehicle{
    public function move();
    public function stop();
}

class Car implements Vehicle{
    public function move(){
        return "Speed:300 ";
    }
   public function stop(){

   }
}
abstract class Engine{
    // function __construct($speed){
    //     $this->speed = $speed;
    // }
    abstract function add($speed);
}
trait messages{
    public function message(){
        echo "Assalam O Alaikum";
    }
}
class Cars extends Engine{
    use messages;
    public function add($speed)
    {
        return "Add: ".$speed ;
    }
}


$car = new Car();

echo $car->move();

$cars = new Cars();

echo $cars->add(10);
$cars->message();
 ?>