
<?php

/**
 * traits
 * 
 */
trait testtrait{
public function sayhello(){
    echo 'Hello From Trait';
    
}
}



class hello{
    use testtrait;
    public function callwelcom(){
        
    }
}

( new hello() )->sayhello();
