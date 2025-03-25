<?php

function sum (int | float ...$numbers):float | int{
    return array_sum($numbers);
}
$name = "sum";
echo $name(1, 2, 3, 85, 84,2, 4);

// is_callable():- chk whether the value is callable or not

// anomnymus function
// in this type of function you can access the outer scop[e variable using the use funtion and then specify the variables you want to access
$score = 120;
$fnc = function( ) use($score):int{
    // return $score; // error: without use function
    return $score;// now we can access with use function
};
echo $fnc();

// here closure concept comes in that means parent havn't access to the child but child have access to paent variables because of closing variable by the children.

// callback function
// that function that passes as an argument to another function and execute after another process
// like inbuilt function of an array like array_map(), array_filter() etc.
function fn1(callable $callbackFunc):void{
    echo "Callback func is going to run...";
    $callbackFunc();
};

$fn2 = function (){
    echo "I am callback func from line #28";
};

fn1(callbackFunc:$fn2);

// arrow fn

$arrowFunc = fn ():int => 2 ;
echo $arrowFunc();

