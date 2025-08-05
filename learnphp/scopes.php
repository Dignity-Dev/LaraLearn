<?php

$superhero = "Superman";

function revealIdentity() {
    global $superhero;
    echo "The superhero is: $superhero\n";
}


revealIdentity();
