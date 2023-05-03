<?php
//indexed array
$numbers = [1,2,3,4,5];
$color = [
    "red" => "apple",
    "blueblack" => "plum",
    "orange" => "orange",
    "yellow" => "lime"
];
print_r($color);
var_dump($numbers);

$empolyeedetails = [
    "john palker",
    35,
    "gmail" => "johnpalker@gmail.com"
];
foreach($empolyeedetails as $value){
    echo $value;
}




//Write a Foreach Loop to read this 
echo "<br>";
$array = [
   "planets" =>
	[
	   "sun" => [ "temp" => "hot", "color" => "red" ],
	   "moon" => [ "temp" => "cold", "color"  => "white" ],
       "earth" => [ "temp" => "normal", "color" => "blue" ]
	]
];
//var_dump($array);
foreach($array as $key){
    foreach($key as $value){
        print_r($value);
    }
}