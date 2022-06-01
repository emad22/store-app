<!<!-- Foreach Expalin -->









<html>
    <head>
        <title>test</title>
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            body{
                padding: 10px;
            }
            table{
                width: 500px;
                border-collapse: collapse;
            }
            table tr td, table tr th{
                border: solid 1px #999;
                text-align: left;
                padding: 5px;
                
            }
            table tr th{
                background: #666;
                color: #fff;
            }
            table tr:nth-child(2n){
                background: #e4e4e4;
            }
            .green{
               color: green;
            }
            .red{
                color: red;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
              <th>Name</th>
              <th>Arabic</th>
            </tr>
            <?php
                $class = array(
                    'Maher Rashad Abd-elhalim'=>25,
                    'Mohamed Rashad Abd-elhalim'=>30,
                    'emad Rashad Abd-elhalim'=>20
                );
                foreach ($class as $item =>$key){
                    echo '<tr>'.
                            '<td>'.$item.'</td>'.
                            '<td>'.$key.'</td>'.
                    '</tr>';
                }
                ?>
                
        </table>

    </body>
</html>
<!<!-- 

(condition) ? /* value to return if condition is true */ 
            : /* value to return if condition is false */ ;
  
  
if (condition) {
    /* condition is true, do something like echo */
}
else {
    /* condition is false, do something else */
}


-->





