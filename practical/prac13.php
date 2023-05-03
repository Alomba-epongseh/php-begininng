<?php
/*1) Print all the elements from an Associative Array. Use Key as Integer.
2) Prepare the Array.
3) Raise an Exception if the Indexed Array is not in sequence.*/

$name = [
    1 => "Cho Junior",
    2 => "Sonia",
    3 => "Zidane",
    4 => "Beri"
];
foreach($name as $key => $value){
    echo $key;
   // $keys[] = $key;
    //print_r($keys);
    
};
function exception_handler($exception){
    echo "error message: " . $exception -> getMessage() . PHP_EOL;
}
//set_exception_handler(exception_handler);

$num = [1,3,4,7,2];
$keys = array_keys($name);
if($keys !== array_keys($keys)){
    throw new Exception("not in sequence");
}
