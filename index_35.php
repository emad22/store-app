<?php
ob_start();
/*Super Global Variable 
 * $_REGUEST ,
 * 
 */
//var_dump($_REQUEST);
var_dump($_FILES);
?>

<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" id="file" accept="image/png,image/jpeg">
            <input type="submit" value="Button">
        </form>
    </body>
</html>

