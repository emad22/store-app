<?php

/**
 * Abstract class
 * interface 
 */

abstract class employee{
    public $Firstname;
    public $lastname;
    public $age;
    public $address;
    
     public $salary;
     public $tax;
     public $overtime;
     public $overtimerate;
     public $absence;
     public $absencerate;
     
     public function getovertime(){
         return $this->overtime * $this->overtimerate;         
     }
     public function getabsent(){
         return $this->absence * $this->absencerate;
     }
     public function getSalary(){
         return $this->salary -( $this->salary * $this->tax);
     }
     abstract public function  showtotalsalary ();

     
}

class manager extends employee{
    
    public $numberofad = 0;
    public function  showtotalsalary (){
         return $this->getSalary() + $this->getovertime() - $this->getabsent() + $this->numberofad*100;
     }
    
}

class supervisor extends employee{
    public $successfulpro = 0;
    public function  showtotalsalary (){
         return $this->getSalary() + $this->getovertime() - $this->getabsent() + $this->successfulpro*1000;
     }
}

class worker extends employee{
    public $bouns = 0;
    public function  showtotalsalary (){
         return $this->getSalary() + $this->getovertime() - $this->getabsent()+ $this->bouns;
     }
}


// Cannot instantiate abstract class employee
//$test = new employee();
//echo $test->getSalary();


$emad = new manager();
$emad->salary = 5000;
$emad->tax = 0.01;
$emad->overtime = 30;
$emad->overtimerate = 15;
$emad->absence = 2;
$emad->absencerate = 75;
$emad->numberofad = 10;

echo $emad->showtotalsalary();

