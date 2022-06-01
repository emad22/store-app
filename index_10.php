<!<!-- Functions Expalin -->
<?php
//functions
//  bulit-in  pre-defined function
//      abs()  => return abstract number
//      cos()  => return the result of degree
   
//  user defined function

//echo abs(-1.4);   =>1.4

//echo cos(90);
//echo floor(3.7);
//echo ceil(3.7);
//echo getrandmax();
//echo Calcu(6000, 0.5);
//
//function Calcu($sal , $tax){
//    $salary = $sal - ($sal/$tax);
//    return $salary;
//}

echo ToThepower(5, 2);
/**
 * 
 * @param type $number
 * @param type $power
 * @return type
 */
function ToThepower($number , $power){
    $result = 1;
    for ($i =0 ; $i < $power ; $i++){
        $result = $result * $number;
    }
    return $result;
}
?>
