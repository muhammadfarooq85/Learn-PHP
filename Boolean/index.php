<?php 
    // boolean values are not case sensitive. 
    // You can write the boolean values in upppercase or lowercase. But it is good practice to stay at one style of writing like just uppercase or lowercase. Note:- Don't mix up the lowercase and uppercase letters.

    $isVerified = true; // legal
    $isKilled = TRUE; // legal
    $isDied = FALSE; // legal
    $isGone = TRue; // bad way but legal

    if($isVerified){
        echo "Goto Dashboard!";
    } else {
        echo "Goto Signup/Signin!";
    };


    // Falsy values in php
    // Except falsy all are truthy values 
    // null
    // 0
    // ""
    // "0"
    // []
    // Follow this article to learn more
    // https://www.thisprogrammingthing.com/2021/Truthy-and-Falsy/

    
?>
