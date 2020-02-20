<? 
function printPattern($input){
    if($input == 0 or $input <0){
        echo $input, " ";
        return;
    }
    echo $input, " ";
    printPattern($input-5);
    echo $input, " ";
}
$input = 34;
printPattern($input);