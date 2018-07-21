<?php

top:

function choose() {
    $places = array('Don\'t bother', 'Burger King', 'McDonalds', 'Waitrose', 'Waitrose', 'That Italian Place on the corner', 'Pret', 'Pret', 'Soho Coffee House', 'Pret', 'Eat', 'Itsu', 'Greggs', 'Greggs', 'Subway');
    $choice = random_int(0, count($places));
    return $places[$choice];
}

$x = choose();

if (strlen($x) == 0) {
   goto top;
}
else {
    echo $x;
    echo "\n";
    exit(0);
}

exit(0);