<?php

// class:- class start with the class keyword and then followed by the name. There are lot of developers who write to sarts the class name with capital letter.

// class consists of various methods and properties.

// there are some special keywords like public, private and protected.

// that class inherits the propeeties called child or derived class. 

// from that class where we inherit the properties called base class or super class.

// 

class Transaction {
    public int|float $amount;
    public function __construct($amount = 0) {
        $this->amount = $amount;
    }

    public function addAmount($amount):int {
        $this->amount += $amount;
        return $this->amount;
    }
};

// $hblBank = new Transaction();
// $hblBank->$amount = 100;
// echo $hblBank->$amount;

class Bank {
    public int $amount = 0;

    public function __construct($amount) {
        $this->amount = $amount;
    }
    
   public function addAmount($amount):int{
        $this->amount += $amount;
        return $this->amount;
    }

    public function withDrawAmount ($amount) {
        $this->amount -= $amount;
    }

    public function payTax($amount, $year){
        $this->amount = $amount * $year / 10; 
    }
};

$habibBank = new Bank(0);
$habibBank->addAmount(100);
$habibBank->addAmount(100);
// 100 + 100;
// echo $habibBank->amount;
$habibBank->withDrawAmount(100);
// 200 - 100;
echo $habibBank->amount;
// 100

$students = '{ "name": "Farooq" }';
print_r( json_decode($students, true)); // true for associative array
// json encode to properly show output
echo json_encode( json_decode($students, true)); // true for associative array
print_r( json_decode($students)); // instance of std class; 
