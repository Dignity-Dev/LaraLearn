<?php

declare(strict_types=1);
function sum(...$numbers){
    $sum =0 ;
    var_dump($numbers);
    foreach($numbers as $number){
        $sum += $number;
    }
    return $sum;
}


var_dump(sum());
var_dump(sum(5));



function introduceTeam($teamName, ...$members){
    echo "Team: $teamName\n";
    echo "Members:\n";
    foreach($members as $member){
        echo "- $member\n";
    }
}


introduceTeam("A Team", "Haadi", "Basheer", "Ajala");
