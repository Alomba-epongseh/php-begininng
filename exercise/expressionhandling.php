<?php

    function printEvenNumbers(int $start, int $end){
        if( $start <= 0 || $end <=0 || $start == $end){
            throw new Exception("Incorrect Input Parameters");
        }

        for(; $start <= $end; $end++){
            if( $start%2 != 0){
                //echo "odd: $start" . PHP_EOL;
                return $start;
            }
        }
    }

    function exception_handler($exception){
        echo $exception->getMessage() . PHP_EOL;
    }

    set_exception_handler("exception_handler");
    echo printEvenNumbers(10, 0);


    try{
        throw new Exception("Raise an Exception");
    }catch(Exception $e){
        echo $e->getMessage();
    }finally{
        echo 'This block can be used as a cleanup section' . PHP_EOL;
    }