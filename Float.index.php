<?php
    $mousePrice = 100;
    echo $mousePrice;

    echo PHP_FLOAT_MAX; // maxmium floating value in php
    echo PHP_FLOAT_MIN; // minmium foating value in php

    $x = 12.6;
    $y= 10;
    $z = $x - $y; // 2.6
    echo var_dump( $z == 2.6 ); // false
    echo var_dump( round($z) == 2.6 ); // true

    // Mathematical Operation on Floating point 
    $a = 3.14;
    $b = 2.71;

    // Addition
    $c = $a + $b; // 5.85

    // Subtraction
    $d = $a - $b; // 0.43

    // Multiplication
    $e = $a * $b; // 8.5094

    // Division
    $f = $a / $b; // 1.1590517223072
?>