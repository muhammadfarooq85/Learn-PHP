<?php

// in php static methods and properties does not depend on the intance it depends upon the class itself. this is very usefult when you want a share functionality.

// static properties:- these properties doesn't depend upon the class instance it deped upon the class itself.

// static methods:- these methods are called without the creating an instance

// in order to declae static methods and poperties we use `static` keyword.

class MyClass {
    public static int $myStaticPropety = 123;

    public static function displayStaticProprty (){
        echo self::$myStaticPropety;
    }

};
// no need to create an instance of the class to access this property
echo MyClass::$myStaticPropety;
echo "<br/>";
// no need to call the function to create the instance 
MyClass::displayStaticProprty();


class Counter {
    public static int $counter = 0;

    public static function increment():int{
        return self::$counter++;
    }
    public static function decrement():int{
        return self::$counter--;
    }
    public static function getCount():int{
        return self::$counter;
    }
};

echo Counter::increment(); // 1
echo Counter::increment(); // 2
echo Counter::increment(); // 3
echo Counter::decrement(); // 2
echo Counter::decrement(); // 1
echo Counter::decrement(); // 0
echo Counter::$counter; // 0
echo Counter::increment(); // 1