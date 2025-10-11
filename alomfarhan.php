<?php

function guessNumber() {
    $number = rand(1, 5);
    echo "Guess a number (1-5): ";
    $guess = (int)fgets(STDIN);
    
    if ($guess == $number) {
        echo "Correct!\n";
    } else {
        echo "Wrong! It was $number\n";
    }
}

function rollDice() {
    $roll = rand(1, 6);
    echo "You rolled: $roll\n";
    if ($roll == 6) {
        echo "Lucky!\n";
    }
}

function calculator() {
    echo "Enter first number: ";
    $a = (float)fgets(STDIN);
    echo "Enter second number: ";
    $b = (float)fgets(STDIN);
    echo "Result: " . ($a + $b) . "\n";
}

while (true) {
    echo "\n1. Guess Number\n";
    echo "2. Roll Dice\n";
    echo "3. Calculator\n";
    echo "4. Exit\n";
    echo "Choose: ";
    
    $choice = trim(fgets(STDIN));
    
    switch ($choice) {
        case '1':
            guessNumber();
            break;
        case '2':
            rollDice();
            break;
        case '3':
            calculator();
            break;
        case '4':
            exit("Goodbye!\n");
        default:
            echo "Invalid choice\n";
    }
}

?>