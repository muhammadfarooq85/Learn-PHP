<?php 

// Variable scoping
// Php has three type of scoping

// Local Scoping
// means a variable that is declared inside a function
$num = 40;
function display (){
    $num  = 50;
    return $num;
}
echo display(); // 50
echo $num; // 40

// This thing is different
$x = 10;
{
    $x = 20;
    echo $x; // 20
};
echo "<br/>";
echo $x; // 20


// Global Scoping
// means a variable that is declared outside the function
$n = 20;
function accessGlobaVariable():int{
    global $n;
    return $n;
}

echo accessGlobaVariable();

// Static scoping
// by default when a function executed then the php destory that variable and free the memory. But if we want to store that variable still after execution then we use static keyword to cache the result.

function static_var() { 
	static $num = 5; 
	$sum = 2;		
	$sum++; 
	$num++; 		
	echo $num, "\n"; 
	echo $sum, "\n"; 
};
static_var(); 
static_var(); 

