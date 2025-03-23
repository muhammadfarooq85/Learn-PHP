<?php 

// variables:- we can chnage the value later.
$firstName = "Farooq";
$firstName = "Ahsan";
echo $firstName;

// Constants:- We cannot chnage the value once it has been assigned.
define("userName", "Farooq"); // creating constants via define function
echo defined("userName"); // checing if the constant has been defined or not retrun boolean vale menas true or false

echo userName;
// Php inbuilt constants 
echo PHP_VERSION; // print the current version of php
echo __LINE__; // PRINT THE CURRENT LINE
echo __FILE__; // print the file PATH


// variable variables means you can create another variable value as the naming convention of another variable
$student1 = "Ahsan";
$$student1 = "Farooq";
echo "$student1";
echo "$student1 $$student1"; // this will not print the $$student1 value 
echo "$student1 {$$student1}"; // this way legal
echo "$student1 ${$student1}"; // this way also legal

?>