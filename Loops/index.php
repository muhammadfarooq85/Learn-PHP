<?php

    // for loop
    for ($i = 0; $i < 10; $i++)  {
        echo $i; 
    };

    // while loop
    $j = 0;
    while(true){
        if ( $j <=10) {
            break;
        };
        $j++;
    };

    // do-while loop
    $k = 0;
    do{
        echo $k;
        $k++;
    } while ($k <= 10);

    // for each loop

    $students = ["name" => "Farooq", "className" => "12th", "section"=>"A+"];
    foreach($students as $student) {
        echo $student . " ";
    };

    