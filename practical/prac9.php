<?php
//1) Write Infinite loop with for loop and print even and odd numbers till 20 numbers.
echo "even numbers for the first 20 elements: ";
        for($num=0; $num<=20; $num++){
            if ($num%2 == 0){
                echo $num . "\t";
                $num++;
                continue;
            }
        }

        echo "<br>";
        echo "odd numbers f0r the first 20 elements: ";
        for($num=0; $num<=20; $num++){
            if ($num%2 == 1){
                echo $num . "\t";
                $num++;
                continue;
            }
        }