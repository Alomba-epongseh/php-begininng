<?php
    //numbers from 1 to 10
    for ($i = 1; $i<=10; $i++){
        echo $i . "<br>";
    }
    //odd numbers from 1 to 10
    echo "odd numbers: ";
    for ($i = 1; $i<=10; $i++){
        $result = $i % 2;
        if ($result == 1){
            echo $i . "\t";
        }    
    }
    echo "<br>";
    //even numbers from 1 to 10
    echo "even numbers: ";
    for ($i = 1; $i<=10; $i++){
        $result = $i % 2;
        if ($result == 0){
            echo $i . "\t";
        }
        
    } 
    echo "<br>";