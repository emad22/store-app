<?php

$users = array(
    "1"=>array(
        "name" =>"Emad Rashad",
        "age" => 30
    ),
    "2"=>array(
        "name" =>"ahmed Rashad",
        "age" => 23
    )
    
);

$user = isset($_GET['user']) ? $_GET['user'] : false;

if ($user != false){
    $key = array_key_exists($user, $users);
    if($key){
        $name = $users[$user]['name'];
        $age  = $users[$user]['age'];
    } else {
        $name = 'Gest';
        $age  = '0';    
    }
}

//echo 'fffffffffffffff' .$user;

?>
<h6>Welcome To our site, <?= $name ?> , your age is <?= $age ?>  </h6>

