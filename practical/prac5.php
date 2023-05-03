<?php
/* 1) Define and Assign $firstname and $lastname variable with your name.
2) Print the firstname, lastname using echo / print
3) Embed the variable inside the quotes.
4) Define a function to print the name.
5) Show PHP Variables are case sensitive.
6) Create a local variable outside the function and define same inside the function. Display the variable
7) Define and show the Global Variable
8) Define and show the Static Variable
9) Show a Super Global Variable
10) Define and show Variable of Variables
11) Use the isset method using tenary operators
12) Define and Display a Constant.
13) Show magic constant */

$firstname = 'Alison';
$lastname = 'Parker';
echo $firstname;
print $lastname;

function name(){
    $firstname = 'Alison';
    $lastname = 'Parker';
    $name = $firstname . $lastname;
    echo $name . PHP_EOL;
}
name();

$num = 5;
//echo $NUM; //displays an error message
function num(){
    $num = 6;
    echo $num;
}
num();
echo $num;


global $age;
function age(){
    $age = 20;
    echo "John's age is $age";
}
age();


static $count = 1;
function countt(){
    while($count<10){
        $count = 5;
        echo $count;
        $count = $count + 5;
        echo $count;
    }
}
countt();

    $name = 'Tita Ernest';
    $gender = 'name';
    echo "${$gender} <br>";

define("CONSTANTT", "man");
echo constant('CONSTANTT');

echo __LINE__ . "<br>";

$val = 2;
echo isset($val);