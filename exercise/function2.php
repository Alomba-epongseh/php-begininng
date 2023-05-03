<?php
    declare(strict_types=1);

    function calc(int $a, int $b){
        $add = $a + $b;
        $subtract = $a - $b;
        $multiply = $a * $b;
        $divide = $a / $b;

        echo "sum is: $add <br>";
        echo "difference is : $subtract <br>";
        echo "product is: $multiply <br>";
        echo "divident is: $divide <br>";
    }

    function display($num, $skip=5){
        for($i=0; $i<$num; $i++){
            if($i != $skip){
                echo $i;
            }
            else{
                continue;
            }
        }
    }
    display(10);
    echo "<br>";
    calc(12,3);