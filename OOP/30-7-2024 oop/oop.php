<?php 

// task1

// class Car1 {
//     public $make;
//     public $model;
//     public $year;
// }

// $car1 = new Car1();
// $car1->make = "BMW";
// $car1->model = "M4";
// $car1->year = 2023;

// echo "Car 1: " . $car1->make . " " . $car1->model . " " . $car1->year . "\n"."<br>";


echo "---------------------------------------------------------------" . "<br>";

// task2

// class vehicle{
// public $type;
// public function move (){
// echo "the vehicle is moving.\n"."<br>";
// }
// }

// class car extends  vehicle {
//     public function  move (){
//         echo "The car is driving on the road.\n" ."<br>";
//     }
// }

// class bike extends vehicle {

//      public function move(){
//         echo "The bike is cycling on the trail.\n"."<br>";
//      }
// } 

// $car=new car();
// $car->move();           //The car is driving on the road


// $bike = new Bike();
// $bike->move();        //The bike is cycling on the trail


// $vehicle =new vehicle();
// $vehicle -> move();        //the vehicle is moving


echo "---------------------------------------------------------------" . "<br>";
 
// task3
// class car {
//     private $make;
//     private $model;
//     private $year;
// //set 
// public function setMake($make){
//     $this->make =$make;
// }
// public function setmodel($model){
//     $this->model =$model;
// }
// public function setyear($year){
//     $this->year =$year;
// }
// //get 
// public function getMake(){
//     return $this->make;
// }
// public function getmodel(){
//     return $this->model;
// }
// public function getyear(){
//     return $this->year;
// }
// }
// $car1 = new Car();
// $car1->setMake("Kawasaki");
// $car1->setModel("R1 1000ss");
// $car1->setYear(2024);
// echo "Car 1: " . $car1->getMake() . " " . $car1->getModel() . " " . $car1->getYear() . "\n <br>";
// $car2 = new Car();
// $car2->setMake("BMW");
// $car2->setModel("M4");
// $car2->setYear(2023);
// echo "Car 2: " . $car2->getMake() . " " . $car2->getModel() . " " . $car2->getYear() . "\n";

echo "---------------------------------------------------------------" . "<br>";
// task4


// تعريف الفئة abstract Shape
abstract class Shape {
    // تعريف الطريقة abstract calculateArea
    abstract public function calculateArea();
}

// تعريف الفئة Circle التي ترث من Shape
class Circle extends Shape {
    private $radius;

    // Constructor to initialize the radius
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // تنفيذ طريقة calculateArea لحساب مساحة الدائرة
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

// تعريف الفئة Rectangle التي ترث من Shape
class Rectangle extends Shape {
    private $width;
    private $height;

    // Constructor to initialize the width and height
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // تنفيذ طريقة calculateArea لحساب مساحة المستطيل
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// إنشاء اوبجيكت من الفئة Circle وحساب مساحته
$circle = new Circle(5);
echo "Circle Area: " . $circle->calculateArea() . "<br>";
echo "---------------------------------------------------------------<br>";

// إنشاء اوبجيكت من الفئة Rectangle وحساب مساحته
$rectangle = new Rectangle(4, 7);
echo "Rectangle Area: " . $rectangle->calculateArea() . "<br>";
echo "---------------------------------------------------------------<br>";


?>