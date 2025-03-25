<?php

// Function Parameters in PHP
// A function in PHP may be defined to accept one or more parameters. Function parameters are a comma-separated list of expressions inside the parenthesis in front of the function name while defining a function. A parameter may be of any scalar type (number, string or Boolean), an array, an object, or even another function.

// Basic syntax
function isVerified($userId, $userName, $useremail):bool{
    return $userId === "1231" ? TRUE : FALSE;
};

// Parameters with type safety
function isStatusPaid (string $userEmail, int $userLaterPaidChallanQty):bool{
    return $userLaterPaidChallanQty  > 2  ? TRUE : FALSE;
};

echo isStatusPaid("farooq@gmil.com", 3);

// Parameters with default values
// if no value is provided then the defaukt value comes in...
function userSignup(string $userId = "125" + $userPassword,string $userEmail, string $userPassword, $isVerified= true):string{
    if($userId && $userEmail && $userPassword && $isVerified){
        return "User registered successfully with verification is {$isVerified}!";
    } else {
        return "Required information is missing!";
    };
};

echo userSignup("8754765fhgf57454", "farooq@gmail.com", "1254df");

// Splat operator
function sum (int ...$nums):int{
    return array_sum($nums);
};

echo sum(1, 2, 3,4, 5, 6);

// Parameters ordering specification
// We can specify the order of arguments and parameters.
function userSignin(string $userId, string $userPassword):string{

};
echo userSignin(userPassword:"465",userId: "12GTHy23Sdad");

function foo (int &$x,int $y):int | float{
    if ($x % $y === 0  ){
        return $x / $y;
    };
    return $x;
};

$x = 2;
$y = 3;

echo foo($x, $y);
echo $x;