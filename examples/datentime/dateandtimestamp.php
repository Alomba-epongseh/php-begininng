<?php
    print_r(getdate());
    $date = date("D d/M/Y");
    $time = date("h:i:s a");

    echo "$date  $time";
    $dateArr = getdate();
    foreach($dateArr as $format => $value){
        echo "$format => $value" . PHP_EOL;
    }
    echo "year" . getdate()["year"];