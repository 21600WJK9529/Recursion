<? 
function checkIfOneDigit($input){
    return $input>=0 && $input<10;
        
}
function checkIfPalindrome($input, $inputDup){
    if (checkIfOneDigit($input))
        return ($input == ($inputDup) % 10); // remainder of $inputDup/10, compares last digit. 141/10 = 14,1 remainder = 1
    
    if(!checkIfPalindrome((int)($input/10), $inputDup))
        return -1;
    $inputDup=(int)($inputDup/10);
    return ($input % 10 == ($inputDup) % 10);   
}
function isPalindrome($input){
    if($input<0)
    $input = (-$input);

    $inputDup = ($input);
    return checkIfPalindrome($input, $inputDup);
}

$input = 64246;
if(isPalindrome($input) == 0) 
    echo "$input<br>This is a palindrome<br><br>"; 
else
    echo "$input<br>This is not a palindrome<br><br>";
    
$input=45;
if(isPalindrome($input) == 0) 
    echo "$input<br>This is a palindrome<br><br>"; 
else
    echo "$input<br>This is not a palindrome<br><br>";