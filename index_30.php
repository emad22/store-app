<?php
session_start();
session_regenerate_id();

echo '<BR>';
//$sid = md5('wuxiancheng.cn');
//session_id($sid);
////session_start();
var_dump( session_id() );

?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h4>Welcome To my session</h4>
    </body>
</html>


