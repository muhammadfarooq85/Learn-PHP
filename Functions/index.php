<?php


// functions
// functions are reusable block of code. Actually there are two types of funvtions built in fuctions and user defined functions

// Basic syntax
// started with function keyword and then name of that function

// Key Concepts in functions
// Parameters, Arguments
// return keyword
// variable scope local vs global
// Anonymus functions

// Named function
function greetUser($name):string {
    return "Hy! {$name}";
}
echo greetUser("Farooq");

// Un-nmaed or anonymus function
$isAuthenticated = function ():bool{
    return true;
};
echo $isAuthenticated();