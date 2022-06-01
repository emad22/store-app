<?php

/**
 * namespaces part 2
 * 
 * 
 */
//namespace Main\Controller;
//namespace Main\Controller;
//use Main\Model\TestModel;
//
//
//include './exist.php';
//class TestController{
//    
//    
//}


//$a =  'TestController';
//$a =  __NAMESPACE__ .'\TestController';
//$var = new $a;
//var_dump($var);


//$model = new TestModel();



/*
 * autoloading 
 */

//require './a.php';
//echo PATH_SEPARATOR;
define('DS', DIRECTORY_SEPARATOR);
define('APP_PATH', dirname(realpath(__FILE__)));
define('PS', PATH_SEPARATOR);
//echo APP_PATH;
define('CONTROLLERS_PATH', APP_PATH. DS.'controllers');
define('MODELS_PATH', APP_PATH. DS.'models');


$paths =  get_include_path() . PS . CONTROLLERS_PATH.PS.MODELS_PATH.PS;

set_include_path($paths);


//$a = new DateTime();




// function __autoload($class) {
//     include  $class . '.php';
// }

function my_autoloader($class) {
    include  $class . '.php';
}

spl_autoload_register('my_autoloader');

$a = new A();
$b = new B();
$c = new C();
//or
//
//spl_autoload_register(function ($class) {
//    require $class. '.php';
//});

?>
