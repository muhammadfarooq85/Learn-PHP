<?php

    $totalMarks = 800;

    if ($totalMarks > 650) {
        echo "good";
    } elseif ($totalMarks > 700) {
        echo "very good";
    } elseif ($totalMarks > 750) {
        echo "Nice";
    } elseif ($totalMarks > 850) {
        echo "Ecellent";
    }else{
        echo "Fabolus";
    };

    