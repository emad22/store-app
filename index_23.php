<?php

/**
 * namespaces
 * 
 */
namespace main\utilities;

include 'exist.php';
class A{
    public function __construct() {
        echo __NAMESPACE__;
    }
    public function saywelcome(){
        echo 'Welcome';
    }
}

$a = new \exist\A;
