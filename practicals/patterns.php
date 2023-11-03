<?php

// Function to print a pattern of asterisks
function printPattern($layers) {
    // Check if the input is a valid positive integer
    if (!isPositiveInteger($layers)) {
        return "Input is not a valid positive integer.";
    }

    // Loop to print the pattern
    for ($i = $layers; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "\n";
    }
}

// Function to check if a value is a positive integer
function isPositiveInteger($value) {
    return is_numeric($value) && is_int($value) && $value > 0;
}

if (count($argv) < 2) {
    echo "Please provide a positive integer as a command-line argument.\n";
    exit(1);
}

$input = (int)$argv[1];
printPattern($input);