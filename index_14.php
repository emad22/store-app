<!-- oop   -->
<?php
//OOP
//  Class and Object
   
class employee{
    
    public $name;
    public $age;
    public $address;
    
    
    public $salary;
    public $tax;
    public $overtime;
    public $overtimerate;
    
    function calcuovertime($overtime , $overtimerate){
        return ($overtime * $overtimerate) ;
        
    }
    
}

$ahmed = new employee();
$ahmed->name = 'Emad Rashad';
$ahmed->overtime = 150;
$ahmed->overtimerate = 2;
echo $ahmed->calcuovertime($ahmed->overtime, $ahmed->overtimerate);


?>
