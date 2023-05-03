<!doctype html>
<html>
<head>
    <title>
        Data Types
    </title>
</head>
<body>

<h1>Exercise 1: Print Student Details</h1>

<h2>Student Information:</h2>
    <?php
        $name = "Eddie Morphy";
        $age = 25;
        $gender = "male";
        echo "I am called $name I am $age years old and I am a $gender";
        echo "<br>";
    ?>

<h2>Exams Attended and Marks:</h2>
    <?php
        $course1 = "maths";
        $course2 = "econs";
        $course3 = "computer";

        $maths = 95;
        $econs = 80;
        $computer = 90.5;

        echo "You have $maths in $course1 <br>";
        echo "You have $econs in $course2 <br>";
        echo "You have $computer in $course3 <br>";
    ?>
<h2>Final Marks:</h2>
    <?php
        $finalmark = $maths + $econs + $computer;
        echo $finalmark . "<br>";
    ?>
<h2>Percentage:</h2>
    <?php
        $totalmark = 300;
        $percentage = ($finalmark/$totalmark)*100;
        echo $percentage . "% <br>";
    ?>

<h2>Result:</h2>
    <?php
        echo($finalmark >= ($totalmark/2))? "$name has passed": "$name has failed"
    ?>

</body>
</html>

