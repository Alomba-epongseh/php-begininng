<?php
    /*1) Create CSV Files with Student details
2) Each line in CSV is one Student Details.
3) Read the CSV File and Store the Students details in Array
4) Iterate the Array and Print the Students Table in HTML Format. */

$student = fopen("students.csv", "w+");
fwrite($student, "Name:Mary, Age:25, Gender:female \n");
fwrite($student, "Name:John, Age:22, Gender:male \n");
fwrite($student, "Name:Martha, Age:24, Gender:female \n");
fwrite($student, "Name:Paul, Age:27, Gender:male \n");

$fsize = filesize("students.csv");
fread($student, $fsize);

//$content = file_get_contents("students.csv");
//print_r( str_getcsv($content) );

$csvFile = file("F:\ampps\www\practical\students.csv");
    foreach( $csvFile as $line){
        $studentArr[] = str_getcsv($line);
    }
    print_r($studentArr);

