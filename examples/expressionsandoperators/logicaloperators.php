<?php
    $name = "Paul";
    $login = true;
    $permission = true;
    echo( $login && $permission)? "Greetings $name": "Greetings" ;
    echo "<br>";
    echo( $login and $permission)? "Greetings $name": "Greetings" ;
    echo "<br>";

    $englishpassed = true;
    $computerpassed = false;
    echo ($englishpassed || $computerpassed)? "$name passed atleast one subject" : "$name passed no subject";
    echo "<br>";
    echo ($englishpassed or $computerpassed)? "$name passed atleast one subject" : "$name passed no subject";
    echo "<br>";

   // $passed = true;
    $archivedmark = 18;
    $passmark = 50;
    $passed = ($archivedmark >= $passmark);
    
    echo ( !$passed )? "$name failed": "$name passed";


    