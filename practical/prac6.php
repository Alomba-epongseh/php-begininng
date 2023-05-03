<?php
    /*1) Show Examples using Arithmetical Operator
2) Show Examples using Conditional Operator
3) Show Examples using Comparison Operator
4) Show Examples using Logical Operator
5) Show Examples using Assignment Operator
6) Show Examples using Increment and Decrement Operator
7) Show Examples using Bitwise Operator
8) Show Examples using Execution Operator
9) Show Examples using Error Control Operator
10) Show Examples using Operator Precedence */

//conditional
    $mark = 40;
    $passmark = 50;
    $pass = ( $mark >= $passmark);
    echo ($pass)?"passed":"failed" . "<br>";

//comparison
$num = 15;
$numtype = $num % 2;
if ($numtype == 0){
    echo "number is even";
}
else{
    echo "number is odd";
}
echo "<br>";

//error
@$value = 1/0;
echo $value . "<br>";

//assignment, increment, decrement, bitwise,
    $num += 10;
    echo $num ;
    $num++;
    echo $num ;
    $num--;
    echo $num ;
    echo ~$num;

//aarithmetic
$num1 = 10;
$num2 = 15;
echo "product is: ";
echo $num1*$num2 . "<br>";

//logical
$temp = 15;
$sky = "dark";
if ($temp == 15 && $sky == "dark"){
    echo "it will rain";
}elseif ($temp == 15 || $sky == "dark"){
    echo "it might rain";
}else{
    echo "it won't rain";
}

//precedence
$num = ++$num * 2;
echo $num;