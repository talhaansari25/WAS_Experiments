<?php

// Function to calculate sum of individual digits
function sumOfDigits($num) {
    $sum = 0;
    while ($num > 0) {
        $sum += $num % 10;
        $num = (int)($num / 10);
    }
    return $sum;
}

// Function to check if a number is palindrome
function isPalindrome($num) {
    $original = $num;
    $reverse = 0;
    while ($num > 0) {
        $reverse = $reverse * 10 + $num % 10;
        $num = (int)($num / 10);
    }
    return $original == $reverse;
}

// Example usage
$number = 12321;
echo "Sum of digits of $number is: " . sumOfDigits($number) . "<br>";
echo "$number is " . (isPalindrome($number) ? "a Palindrome" : "not a Palindrome");

?>
