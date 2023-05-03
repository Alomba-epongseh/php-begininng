<?php
    $num = 2;
    if($num>5){
        print 'number is greater than 5';
    }
    else{
        print 'number is less than 5';
    }
    //if without curly braces
    $num = 20;
    if($num == "20")
        print 'number is 20';
    
    else
        print 'number is not 20 ';
    echo '<br>';
    //student passed or failed

    $mark = 100;
    if($mark >= 50)
        print 'student passed';
    
    else
        print 'student failed';

    echo '<br>';
    //odd or even number(elseif)

    $num = 13;
    if ($num%2 == 0)
        echo "number is even";
    elseif($num%2 == 1)
        echo "number is odd";
    else
        echo "not a number";
    echo '<br>';
    
    //switch
    $num = 454;
    $result = $num % 2;
    switch($result){
        case 0:
            echo "even number";
            break;
        case 1:
            echo " odd number";
            break;
        default:
            echo "invalid";
            break;
    }