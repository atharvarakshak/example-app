<?php

// Function to generate a Fibonacci sequence for the first $n numbers
function generateFibonacci($n) {
    if (!isPositiveInteger($n)) {
        return "Input is not a valid positive integer.";
    }

    $fibonacciSequence = array();
    $a = 0;
    $b = 1;

    for ($i = 1; $i <= $n; $i++) {
        $fibonacciSequence[] = $a;
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }

    return $fibonacciSequence;
}

// Function to check if a value is a positive integer
function isPositiveInteger($value) {
    return is_numeric($value) && is_int($value) && $value > 0;
}

// Function to display the Fibonacci sequence or an error message
function displayResult($input, $result) {
    if (is_array($result)) {
        echo "Fibonacci sequence for the first $input numbers: " . implode(", ", $result) . "\n";
    } else {
        echo $result . "\n";
    }
}

if (count($argv) < 2) {
    echo "Please provide a positive integer as a command-line argument.\n";
    exit(1);
}

$input = (int)$argv[1];
$result = generateFibonacci($input);
displayResult($input, $result);