<?
function factorial($input){
   if($input<=1){
       return 1;
   }else{
       return $input * factorial($input-1);
   }
}

$number = 10;

$factorial=factorial($number);
echo "Factorial for: $number is $factorial";
/*
$gmp = gmp_fact($number);
echo "<br>Using existing php function gmp_fact: $gmp"
*/
?>


