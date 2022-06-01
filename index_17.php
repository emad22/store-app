<!-- oop   -->
<?php
//OOP
//  Class and Object



/**
 * 
 */
class student{
    
    protected $name;
    protected $age;
    protected $level;
    protected $score;
    
    protected $subject = array(
      'Arabic'   =>0,
      'Math'  =>0,
      'English' =>0,
      'science' =>0
    );
    
    protected $minscore = 100;
    protected $maxscore = 200;
    
    public static $teacher ='Ahmed Rashad';


    CONST Min_age = 12;
    CONST Max_age = 20;

    function __construct($name , $age) {
        $this->setname($name);
        $this->setage($age);
        
    }
    private function setname($name){
        $name = strtolower($name);
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $name = ucwords($name);
        $name = substr($name,0, 20);
        $this->name = $name;
    }
    
    public function getname(){
        return $this->name;
    }
    private function setage($age){
//        echo __CLASS__;
        $age = filter_var($age, FILTER_SANITIZE_NUMBER_INT);
        $age = abs($age);
        if($age < static::Min_age || $age > static::Max_age){
            throw new Exception('Sorry age must be between 12 and 20');
        } else {
            $this->age = $age;
        }
    }
    public function getage(){
        return $this->age;
    }
    
    public function getSub(){
        return $this->subject;
    }
    
    public function getMinscore(){
        return $this->minscore;
    }
    public  function getMaxscore(){
        return $this->maxscore;
    }
    
    
    public static function showWel(){
        return 'Welcome ';
    }
    public static function showame(){
        return static::$teacher;
    }

        public function setSubScore($subjectName , $value){
        
        if(array_key_exists($subjectName, $this->subject)){
            $value = filter_var($value , FILTER_SANITIZE_NUMBER_INT);
            $value = abs($value);
            if($value > 50){
                throw new Exception('Sorry max is 50');
            } else {
                $this->subject[$subjectName]  = $value;
                
            }
            
            
        } else {
            throw new Exception('Sorry we donthave subject name');
        }
    }
     public function getSubScore($subjectName){
         if(array_key_exists($subjectName, $this->subject)){
            
                return $this->subject[$subjectName];
            
        } else {
            throw new Exception('Sorry we dont have subject name');
        }
     }
    
    
}



/**
 * 
 */
class Grad1Student extends student{
    
    private $activity;
    public static $teacher ='moo Rashad';
    
    
    CONST Min_age = 13;
    CONST Max_age = 21;

    public function __construct($name, $age) {
        
        parent::__construct($name, $age);
        $this->minscore = 125;
        $this->maxscore = 250;
        $this->subject['Computer'] = 0;
    }
    
    public function setStAsActive(){
        $this->activity = 'activ';
    }
    
    
}





//echo Grad1Student::showame();

$all  = new Grad1Student('emad rashad',13);
//echo $all->showame();

echo Grad1Student::showame();

//echo $all::Min_age;

$all->setSubScore('Computer', 44);
echo '<pre>';
print_r($all->getage());
echo '<br>';
print_r( $all->getSubScore('Computer'));
echo '</pre>';


?>
