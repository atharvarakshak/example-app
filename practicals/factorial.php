<?php

// Function to calculate the factorial of a non-negative integer
function calculateFactorial($n) {
    if (!isNonNegativeInteger($n)) {
        return "Input is not a valid non-negative integer.";
    }

    if ($n == 0 || $n == 1) {
        return 1;
    }

    $factorial = 1;
    for ($i = 2; $i <= $n; $i++) {
        $factorial *= $i;
    }

    return $factorial;
}

// Function to check if a value is a non-negative integer
function isNonNegativeInteger($value) {
    return is_numeric($value) && is_int($value) && $value >= 0;
}

// Function to display the result
function displayResult($input, $result) {
    if (!is_numeric($result)) {
        echo $result . "\n";
    } else {
        echo "Factorial of $input is: $result\n";
    }
}

if (count($argv) < 2) {
    echo "Please provide a non-negative integer as a command-line argument.\n";
    exit(1);
}

$input = (int)$argv[1];
$result = calculateFactorial($input);
displayResult($input, $result);