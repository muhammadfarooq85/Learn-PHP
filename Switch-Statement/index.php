<?php

$totalAmount = 100_000;

switch ($totalAmount) {
    case 50000:
        echo 50000;
        break;
    case 60000:
        echo 60000;
        break;
    case 40000:
        echo 40000;
        break;
    default:
        echo "Happy Money!";
};

// break:- terminates the whole loop
// continue:- skip the current itteration

    $nums = [1,2,3,4];
    for ($num= 0; $num < count($nums) ; $num++) { 
        if ($num  === 2) {
            continue; // means skip the current itteration and moves on to the next
        };
    };

    for ($num= 0; $num < count($nums) ; $num++) { 
        if ($num  === 2) {
            break; // means terminates the whole loop or stop the loop here
        };
    };