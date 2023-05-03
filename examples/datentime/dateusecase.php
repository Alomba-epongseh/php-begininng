<?php
    echo date_create("yesterday")->format("Y/m/d h:i:s:a") . PHP_EOL;
    echo date_create("tomorrow")->format("Y/m/d h:i:s:a") . PHP_EOL;
    echo date_create("+3 day")->format("Y/m/d h:i:s:a") . PHP_EOL;

    $stringtime = strtotime("29-04-23 13:14");
    $timenow = strtotime(time());
    //$strtimedifference = abs($stringtime - $timenow)
    
    echo "$stringtime " . PHP_EOL;

    if(time() == $stringtime){
        echo "present time" . PHP_EOL;
    } 
    elseif(time() < $stringtime){
        echo " time is behind" . PHP_EOL;
    }
    else {
        echo "time is ahead" . PHP_EOL;
    }