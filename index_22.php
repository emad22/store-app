<?php

/**
 * Magic Methods
 * 
 */
class database{
    public $link;
    public $dsn;
    public $username, $password;


    public $querychach;


    public function __construct($dsn ,$username, $password) {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
        $this->link = new PDO($dsn,$username,$password);
    }
    
    public function __sleep() {
        return array('dsn','querychach','username','password');
    }
}



$obj = new database('mysql://hostname=localhose;dbname=test', 'root', '');
//var_dump($obj);
$ser = serialize($obj);
echo $ser;
