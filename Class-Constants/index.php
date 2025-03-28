<?php

// In PHP, a class constant is a constant that is defined within a class and is accessed using the class name or an instance of the class. Class constants are useful for values that should not change once they are set, and they are often used for things like configuration settings or fixed values related to the class.

class Home {
    public const homeNumber = 1021;
};
// using the class name and scope operator (recommended)
echo Home::homeNumber;
echo "<br/>";
// using the instance of class
$zafarsHome = new Home();
echo $zafarsHome::homeNumber;

class Vehicle {
    public const publicWheels = 4;
    public const publicDoors = 4;
    private const privateDoors = 6;
    private const privateWheels = 6;

    public function getInfo():array{
        return [self::publicWheels ,self::publicDoors];
    }
}

echo Vehicle::publicWheels; // 4
echo Vehicle::publicDoors; // 4
echo Vehicle::privateDoors; // error due to pivate property only accessable inside the class using self:: sntax
echo Vehicle::privateWheels; // error due to the private only accessable inside the class using self:: sntax