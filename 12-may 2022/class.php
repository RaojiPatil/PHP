<?php 
class Task {
 public $decription = "hi";
 
 public function __construct($decription)
 {
     $this -> decription = $decription;
 }

}

$task = new Task("learn OOP");
var_dump($task -> decription);
?>



<?php 


class Person {
    public $name;
    public $age;

    public function __construct($name) {
        $this -> name = $name;
    }
  
   public function getAge() {
       return $this -> age;
   }


   public function setAge($age) {
    
    if($age < 18) {
        throw new Exception("person is not old enough.");
    }
    $this -> age = $age;
    }

}

$john = new Person('raoji patil');

$john -> setAge(30);

var_dump($john -> getAge());






?>