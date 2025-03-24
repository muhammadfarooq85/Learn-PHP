<?php

$statusCode = 300;
switch ($statusCode) {
    case 200:
    case 300:
        $message = null;
        break;
    case 400:
        $message = 'not found';
        break;
    case 500:
        $message = 'server error';
        break;
    default:
        $message = 'unknown status code';
        break;
};

$message = match($statusCode){
    200, 300 => "null",
    404 => "not found",
    500 => "Server Error",
    default => "Unknown status code"
};

echo $message;

// Difference between Match and Switch statement
// it doesn't require a break statement
// it can combine different arms into one using a comma
// it returns a value, so you only have to assign value once