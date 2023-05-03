<?php
    /*function multiple($number, $limit):array{
        for ($index = 1; $index<=$limit; $index++){
            $array = [];
            $result = $number * $index;
            $array[] = $result;
            //return $array;
        }
        return $array;
    }
    $multiples = multiple(3,10);
    print_r($multiples);*/

    function multiple($number, $limit):int{
        for ($index = 0; $index<=$limit; $index++){
            $result = $number * $index;
            echo $result . ", ";
           //return $result;
        }
        return $result;
    }
    multiple(3,10);
    