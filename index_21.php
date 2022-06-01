<?php

/**
 * Magic Methods
 * 
 */
class student {

//    public $name;
    private $data =  array();
    private $name;


    public function __construct() {
//        echo 'This Constructor has been called';
    }

    public function __set($name, $value) {
//        echo 'this function has been called';
        $this->data[$name] = $value;
    }
    
    public function __get($key) {
        if(isset($this->$key)){
            return $this->data[$key];
        } else {
            echo 'The Key Not Exit';
        }
    }
    public function __isset($name) {
        if(array_key_exists($name, $this->data)){
            return true;
        }
        return false;
    }
    public function __unset($key) {
        if(isset($this->data[$key])){
            unset($this->data[$key]);
        }
    }
    
    public function __call($name, $arguments) {
        if(method_exists($this, $name)){
            $this->name($arguments);
        }else{
            echo 'this method dont exit';
        }
    }
    public function sayhi(){
        echo 'hhhhhhhhhhhhhhhhh';
    }
}

$emad = new student();
$emad->name = 'emad';
$emad->age = 30;
//echo '<pre>';
//var_dump($emad);
//echo '</pre>';
//unset($emad->age);
//echo $emad->age;
//echo '<pre>';
//var_dump($emad);
//echo '</pre>';

