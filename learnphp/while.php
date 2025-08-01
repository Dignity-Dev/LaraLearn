<?php


$secret = "magic";
$attempt = 0;
$maxAttempts = 3;

while ($attempt < $maxAttempts) {
    echo "Guess the Secret Word: ";
    $guess = trim(fgets(STDIN));
    $attempt++;

    if ($guess === $secret) {
        echo "Congratulations! You've guessed the secret word.\n";
        break;
    } else if($attempt === $maxAttempts) {
        echo "Sorry, you've used all your attempts. The secret word was '$secret'.\n";
    }else {

        echo "Wrong guess. You have " . ($maxAttempts - $attempt) . " attempts left.\n";
    }
}
