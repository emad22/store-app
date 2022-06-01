<?php


/*
 *  ["user_name"]
 * ["user_email"]
 *  ["user_password"]
 * ["user_age"]
 * ["user_bio"]
 *  ["user_job"]
 * ["user_interest"] }
 */

class User{
    
    public $user_name;
    public $user_email;
    public $user_password;
    public $user_age;
    public $user_bio;
    public $user_job;
    public $user_interest;
    
    public function __toString() {
        return 'welcome to our website ' .$this->user_name;
    }
}
