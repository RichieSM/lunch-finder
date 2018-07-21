<?php

/**
 * Stress test (/bin/bash):
 * while :; do curl http://localhost/lunch.php; done
 * OR
 * while :; do php lunch.php; done
 * OR to write to a file:
 * while :; do php lunch.php >> output.txt; done
 *
 * However, it would be more efficient to run the code below in a loop rather than starting up the PHP binary every time.
 */

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
    //$randomFirstChoice = random_int(0,1); // Make $places[0] appear 50% less often... (disabled for now)
    //$choice = random_int($randomFirstChoice, count($places) - 1);
    $choice = random_int(1, count($places) - 1);
    return $places[$choice];
}

$x = choose();

if (strlen($x) > 0) {
    echo $x . "\n";
    exit(0);
}
else {
   exit(1);
}