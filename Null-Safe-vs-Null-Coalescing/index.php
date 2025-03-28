<?php

// ?? Null Coalescing Operator
// if password is null. Then right hand operand value will be displayed.
// if password is not null. Then right hand value will not be displayed.
$userPassword;
echo $userPassword ?? "12gsts";
$userPassword1 = "123";
echo $userPassword1 ?? "456";

// ?-> Null Safe Operator
class Human {
    public function __construct(public string $name = "", public string $id = rand()) {
        $this->name = $name;
        $this->id =  $id;
    }

    public function register($name) {
        $this->name = $name;
    }

    public function getInfo(): string {
        return $this->name . $this->id;
    }
};

$human = new Human();
$human?->register("Farooq");
echo $human?->getInfo();