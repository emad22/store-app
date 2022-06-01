<!<!-- Array Example 1 -->
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
        </style>
    </head>
    <body>
        <table>
            <tr>
              <th>Name</th>
              <th>Arabic</th>
              <th>English</th>
              <th>Math</th>
              <th>Science </th>
              <th>Total</th>
              <th>Status</th>
            </tr>
            <?php
                $studets = array('Emad','Ahmed','Maher','Mohamed','Halim');
                $arabic  = array(20,40,45,40,42);
                $english = array(18,37,40,42,44);
                $math    = array(22,47,43,41,40);
                $science = array(10,42,47,46,46);
                $total = 0;
                $success = 0;
                $failed = 0;
                for ($i = 0 ;$i<5 ; $i++){
                    $total = $arabic[$i] + $english[$i] + $math[$i] + $science[$i] ;
                    $status  = ($total > 75 )  ? 'Pass' : 'Fail' ;
                    if($total > 75){
                        $success++;
                    } else {
                        $failed++;
                    }
                    echo "<tr>".
                            "<td>".$studets[$i]."</td>".
                            "<td>".$arabic[$i]."</td>".
                            "<td>".$english[$i]."</td>".
                            "<td>".$math[$i]."</td>".
                            "<td>".$science[$i]."</td>".
                            "<td>".$total."</td>".
                            "<td>".$status."</td>".
                         "</tr>";
                }
              
            ?>
            <tr >
                <th colspan="7">
                    this class is <?php echo ($success  > $failed)  ? 'Good' : 'Bad' ; ?>
                </th>
            </tr>
            
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





