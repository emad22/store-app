<?php

require_once './user.class.php';

if(isset($_POST['sing-up']) ){
    $user = new User();
    
    
    $user->user_name     = $_POST['user_name'];
    $user->user_age      = $_POST['user_age'];
    $user->user_bio      = $_POST['user_bio'];
    $user->user_email    = $_POST['user_email'];
    $user->user_interest = $_POST['user_interest'];
    $user->user_job      = $_POST['user_job'];
    $user->user_password = $_POST['user_password'];
    
//    var_dump($user);
    echo $user;
}

