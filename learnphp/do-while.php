<?php

do{
    $diceRoll = rand(1, 6);
    echo "You rolled a $diceRoll\n";
}while ($diceRoll !== 6);

if ($diceRoll === 6) {
    echo "You rolled a six! Stopping the game.\n";
}


