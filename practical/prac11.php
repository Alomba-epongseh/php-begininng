<?php
    /*1) Create a Students Array with 3 students
2) Provide the details: ID, Name, Age and Class
3) Fill up the Array and Display in HTML Page
4) Use Table to display the Students details.*/

$students = ["John", "Peter", "Penn"];
    foreach($students as $stu){
        echo "Student Name: $stu" . PHP_EOL;
    }

    $student_details = [
        "John" =>
            [
                "Name" => "John",
                "Class" => "Computer",
                "ID" => "001",
                "Age" => "20"
            ],
        "Peter" =>
            [
                "Name" => "Peter",
                "Class" => "Maths",
                "ID" => "002",
                "Age" => "22"
            ],
        "Penn" =>
            [
                "Name" => "Penn",
                "Class" => "Computer",
                "ID" => "003",
                "Age" => "21"
            ]

    ];

    echo "<table>";
    echo "<tr> <th>NAME</th> <th>CLASS</th> <th>ID</th> <th>AGE</th></tr>";
    foreach($student_details as $i => $item)
    {
        echo "<tr>";
        foreach($item as $val => $val1)
        {
            echo "<td style = 'border: 1px solid grey';><br> &nbsp &nbsp &nbsp",$val1,"&nbsp &nbsp &nbsp <br></td>";

        }
        echo "</tr>";
    }
    echo "</table>";