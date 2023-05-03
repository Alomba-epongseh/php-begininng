<?php
    $mark1 = 20;
    $mark2 = 18;
    $mark3 = 19;

    $markarchive = $mark1 + $mark2 + $mark3;
    echo $markarchive;
    echo $mark1 + $mark2 + $mark3 . "<br>";

    $totalmark = 60;
    
    echo "the difference between the mark archived and the total mark is: ";
    echo $totalmark - $markarchive . "<br>";

    $length = 15;
    $breath = 20;
    $area = $breath * $length;
    echo "area is " . $area . "<br>";

    $percentage = ($markarchive/$totalmark)* 100;
    echo "the percentage obtained is: " . $percentage . "<br>";

    $modulus = $length % 2;
    $modulus1 = $breath % 2;
    echo $modulus  . ",";
    echo $modulus1 . "<br>";


    $exponent = $length ** $breath ;
    echo "the exponent is: $exponent" . "<br>";
