<?php 


    // Arthimetic operators
    // +, -, *, /, **, %
    
    $num1 = 12;
    $num2 = 34;
    echo $num1 + $num2;  
    echo $num1 * $num2;  
    echo $num1 - $num2;  
    echo $num1 / $num2;  
    echo $num1 % $num2;  
    echo $num1 ** $num2;
    
    // Assignment Operator
    // +=, -=, *=, /=, %=, **=
    echo $num1 += $num2;  
    echo $num1 *= $num2;  
    echo $num1 -= $num2;  
    echo $num1 /= $num2;  
    echo $num1 %= $num2;  
    echo $num1 **= $num2;

    // String Operators
    // ., .=

    $studentName = "Muhammad Farooq";
    $fatherName = "Muhammad Irshad";
    echo $studentName . "/" . $fatherName;

    $str1 = "Muha";
    $str2 = "mmad";
    $str1 .= $str2;
    echo $str1;

    // Comparison Operator
    // >, <, >=, <=, ==, ===, !=, !==, <=>, < >, ??, ?:

    $pcb = 2000;
    $icb = 100;

    if($pcb > $icb){
        echo "PCB ZINDABAD!";
    };
    
    if($pcb < $icb){
        echo "ICB ZINDABAD!";
    };
    
    if($pcb <= $icb){
        echo "ICB ZINDABAD & PCB ZINDABAD!";
    };
    
    if($pcb >= $icb){
        echo "ICB ZINDABAD & PCB ZINDABAD!";
    };

    echo $pcb <=> $icb; // 1

    $success = null;
    // ternory operator
    // alternative to if-else operator
    echo $success === true ? "Me ao ga..." : "Me nahi ao ga...";
    // null caolsecing operator:- if the left is null or undefined then the right will display otherwise not.
    echo $success ?? "Hello Farooq!";