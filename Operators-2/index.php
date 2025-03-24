<?php 

    // Error corntrol operator
    // @

    $file = file("./name.txt"); // generate error
    $file1 = @file("./name.txt"); // not generate error because we use @ before the function to ignore the error

    // Increment-Decrement operator
    $num = 12;
    $num++; // 12
    echo $num; // 13
    --$num; // 12
    $num--; 12; // 12
    echo $num; // 11

    
    if($success){
        $num++;
    } else {
        $num--;
    };

    // Logical operator
    // && or and, || or or, xor, !
    
    // &&:- both condition must be true otherwise code will not run
    // ||:- only one condition must be true otherwise code will not run
    //  !:- negate the boolean value like if we write jsut before true it make false.


    // Array operators
    // +, ==, ===, <>, !=, !==, 