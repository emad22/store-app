<?php
$paths = dirname(realpath(__FILE__)) . DIRECTORY_SEPARATOR . 'sessions';
session_save_path($paths); // change the session path

session_start();
echo $_SESSION['msg'];

session_write_close();
//$_SESSION['msg3'] = 'welcom3 to my session';

var_dump($_SESSION);
