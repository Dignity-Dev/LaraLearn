<?php

$superhero = "Superman";

function revealIdentity() {
    global $superhero;
    echo "The superhero is: $superhero\n";
}


revealIdentity();

function countVisitors(){
    static $visitorCount = 0;
    $visitorCount++;
    echo "Visitor count: #$visitorCount has arrived\n";
}

countVisitors();
countVisitors();
countVisitors();
