<?php
    //time in australia
    date_default_timezone_set("Australia/Melbourne");
    $timeArr = time();
    print_r($timeArr) . PHP_EOL;
    var_dump($timeArr);

    echo date("d/m/y  h:i:s a");

    //time difference
   /* $date1 = date_default_timezone_set("Australia/Melbourne");
    $date2 = date_default_timezone_set("Cameroon/Douala");
    $diff = date_diff($date1, $date2);
    print_r($diff);*/

    /*$date1 = date_create("yesterday")->format("d/m/y  h:i:s a");
    $date1 = date_create("now")->format("d/m/y  h:i:s a");
    $diff = date_diff($date1, $date2);
    print_r($diff);*/

    $start = date_create('2023-04-22 12:01:00');
    $end = date_create('2023-05-23 13:15:00');
    $diff=date_diff($end,$start);
    print_r($diff);