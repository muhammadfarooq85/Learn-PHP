<!-- If your entire file will contain the php code then it is not necessary to close the php tag. If you are writing inside the html then write. It is necessary to end every statement in php with semi-colon other wise parse error. but if there one statement and you don't end that statement with semi-colon then just put the closing tag and you will free from parse error.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php 
    // legal comment
    # legal comment
    /* multi line comment */
    ?></h1>
</body>
</html>


<?php 

// print "Hello World!";
// echo  "Hello World!";
// echo "Hello World, I'm farooq. " // legal
// echo 'Hello World, I'm farooq. ' // Illegal
// echo 'Hello World, I\'m farooq. ' // legal but use escaping character

// in php variables always starts with dollr sign. Then it follows varable naming conventioing rules.

$userName = "Farooq";
echo $userName;

echo "Hello, Mr. $userName"; // legal
echo "Hello, Mr. {$userName}"; // legal
echo 'Hello, Mr. {$userName}'; // legal but we will not see the variable value.

?>