<?php

// declare:- this statement is used to set execution directives for the current scope.
// used to change the behaviour of interpretor or certain block of code.

// basic synatx
// declare(directive)

// wehere declare used
// ticks:- it tell php to execute the code at specified number of ticks
// encoding:- when you want to chnage the character coding of script
// strict_types:- it tells to php to enforce strict type checking

// ticks
declare(ticks=1);

// function tickHandler() {
//     echo "This is a tick event!\n";
// }

// register_tick_function('tickHandler');  // Registers the tick event handler

// for ($i = 0; $i < 5; $i++) {
//     // The tickHandler function will be called on each tick during this loop
//     echo "Loop iteration: $i\n";
// }

// encoding
// declare(encoding = "UTF-8");

// strict_types
declare(strict_types = 1);
$sum = function(int $x, int $y ):int{
    return $x + $y;
};

// echo $sum("1", 3); // without strict_types it convert to integer and show you 4
echo $sum("1", 3); // with strict_types it will not convert to integer and through type error and give warning
// so mainly used for type safety so that your code remains clean 