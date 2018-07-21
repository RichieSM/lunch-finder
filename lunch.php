<?php

/**
 * Stress test (/bin/bash):
 * while :; do curl http://localhost:/lunch.php; done
 * OR
 * while :; do php lunch.php; done
 */

top:

/**
 * This function makes a simple random choice. At this time weightings are done by repetition. True weighting to come later.
 *
 */
function choose() {
    $choice = 0;
    $places = array('Somewhere you don\'t like much', 'Burger King',
                    'McDonalds', 'Waitrose', 'Waitrose',
                    'That Italian Place on the corner', 'Pret',
                    'Pret', 'Soho Coffee House', 'Pret', 'Eat',
                    'Itsu', 'Greggs', 'Greggs', 'Subway',
                    'Pret', 'McDonalds', 'Pret', 'Eat',
                    );
    $randomDontBother = random_int(0,1); // Make 'Somewhere you don't like much' appear 50% less often... (disabled for now)
    //$choice = random_int($randomDontBother, count($places) - 1);
    $choice = random_int(1, count($places) - 1);
    return $places[$choice];
}

$x = choose();

if (strlen($x) == 0) {
   goto top;
}
else {
    echo $x . "\n";
    exit(0);
}
