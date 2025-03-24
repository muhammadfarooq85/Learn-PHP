<?php

    // We use array for storing multiple values in an array. It makes our life easy.  

    $students = ["Ahmed", "Zubair", "Aslam", "Farooq"];
    print_r($students);
    echo $students[0];
    print_r($students);
    echo $students[0] = "Sadam Hussain";
    print_r($students);
    

    $staff = [["name"=>"Farooq"], ["name"=>"Ahsan"], ["name"=>"Adeel"]];
    print_r($staff[0]);
    
    $emplyees = [ "employee1"=> ["name"=>"Farooq"], "employee2"=>["name"=>"Ahsan"],"employee3"=> ["name"=>"Adeel"]];
    print_r($emplyees['employee1']["name"]);

    // Adding element at the last of array
    $employees[] = "Adil";  
    array_push($employees,  "Adil");
    print_r($employees);
    
    // adding the element to the start of array
    array_unshift($employees,  "Imran");
    print_r($employees);
    
    // Removing the element at the last of an array
    array_pop( $employees);
    print_r($employees);
    
    // Removing the element at the start of an array
    array_unshift( $employees);
    print_r($employees);

    // accessing the elemnent from an array
    echo $employees[0];
    echo $employees[-1]; // Illegal
    