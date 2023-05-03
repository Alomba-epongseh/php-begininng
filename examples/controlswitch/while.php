<?php 
    
    $age = 40;
    while($age <= 40 && $age >= 0){
        echo $age . "\t";
        $age--;
        //goto loop1;
    }
    //loop1:
      //  echo "black";

    // do while loops
    $number = 1;
    include_once "if.php";
     

    do {
        echo $number . "\t";
        $number++;
        $number = $number ** 2;
    }
    while($number <= 100);

    include_once "if.php";