<?php
    // Integer
    $x = 12;
    echo  var_dump($x); // Int(12)

    // to check if the particular varible is integer or not.
    $y = 12;
    echo is_int($y); // true
    
    $z = 1.1;
    echo is_int($z); // false
    
    // Type casting on string:- Now int will convert the string to the int 
    $yy = (int) "12";
    echo is_int($z); // 12
    
    // stops on point (.) and print out the 12
    $zz = (int) 12.432;
    echo is_int($z); // 12
    
    // we can write underscore in big int values to read easily. Those underscores will not be prented and ignored
    $totalAmount = 100_000;
    echo is_int($totalAmount); // 100000
 ?>