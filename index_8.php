<!<!-- Array Example 2 -->



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
              <th>math</th>
              <th>English</th>
              <th>Total </th>
              <th>Percentage</th>
              <th>Status</th>
            </tr>
            <?php
                $class = array(
                    array('Maher Rashad Abd-elhalim',25,35,40),
                    array('Mohamed Rashad Abd-elhalim',30,40,42),
                    array('emad Rashad Abd-elhalim',20,15,17)
                );
                $class2 = array(
                    array('haliem Rashad Abd-elhalim',38,35,40),
                    array('abdel-rahman Rashad Abd-elhalim',45,45,45),
                    array('ahmed Rashad Abd-elhalim',32,43,41),
                );
                $school = array($class,$class2);
                $total = 0;
                $success = 0;
                $clssCss='';
                $st = 0;
                $bestscor = 0;
                
                $failed = 0;
                for ($i = 0 , $ii= count($school); $i< $ii; $i++){
                    echo "<tr>". "<th colspan='7' >". "Class".($i+1) ."</th>". "</tr>";
                    for($j=0, $jj=count($school[$i]); $j<$jj;$j++){
                        $total = $school[$i][$j][1] + $school[$i][$j][2] + $school[$i][$j][3] ;
                        $perc = ($total/150) * 100;
                        $status  = ($total > 75 )  ? 'Pass' : 'Fail' ;                                      
                        $clssCss =$total>50  ? 'green'  :'red';
                        if($total > $bestscor){
                            $bestscor  = $total;
                            $st = $j;
                        } 
                        echo "<tr>".
                            "<td>".$school[$i][$j][0]."</td>".
                            "<td>".$school[$i][$j][1]."</td>".
                            "<td>".$school[$i][$j][2]."</td>".
                            "<td>".$school[$i][$j][3]."</td>".
                            
                            "<td>".$total."</td>".
                            "<td>".round($perc,2)."</td>".
                            "<td><span class='$clssCss'>".$status."</span></td>".
                         "</tr>";
                    }
                    echo "<tr>". "<th colspan='7' >". "Best Score:   ". $school[$i][$st][0] ."(". $bestscor.")" ."</th>". "</tr>";
                   
                $bestscor = 0;
                $st = 0;
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





