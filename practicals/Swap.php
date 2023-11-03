<?php

// Function to swap the values of two variables
function swapNumbers(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

// Initialize two numbers
$firstNumber = 5;
$secondNumber = 10;

// Display the numbers before swapping
echo "Before swapping:\n";
echo "First Number: " . $firstNumber . "\n";
echo "Second Number: " . $secondNumber . "\n";

// Call the swapNumbers function to swap the values
swapNumbers($firstNumber, $secondNumber);

// Display the numbers after swapping
echo "After swapping:\n";
echo "First Number: " . $firstNumber . "\n";
echo "Second Number: " . $secondNumber . "\n";
?>