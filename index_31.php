<?php

//phpinfo();

//session_save path
//echo dirname(realpath(__FILE__));
//$paths = dirname(realpath(__FILE__)) . DIRECTORY_SEPARATOR . 'sessions';
//session_save_path($paths); // change the session path


//Session locking
//session_write_close();
//
//session_start();
//
//$_SESSION['msg'] = 'welcom to my session';
//$_SESSION['msg2'] = 'welcom2 to my session';

//mcrypt 
// echo mcrypt_module_get_algo_key_size(MCRYPT_BLOWFISH);
// echo mcrypt_module_get_algo_key_size(MCRYPT_BLOWFISH);
//echo mcrypt_list_algorithms();
$key = "KERTY$%^&*NJKLL";
mcrypt_decrypt(MCRYPT_BLOWFISH,$key,'welcom to my session' , MCRYPT_MOD_EC);

//session_write_close();
//session_start();
//$_SESSION['msg3'] = 'welcom3 to my session';

//var_dump($_SESSION);
