<!doctype html>
<html>
<head>
    <title>
        Data Types
    </title>
</head>
<body>

<h1>Exercise 1: Use All Data Types</h1>

<h2>Calculate the area using Length and breath using Integer:</h2>
    <?php
        $length = 15;
        $breath = 5;
        $area = $length * $breath;
        echo $area . "<br>";
    ?>

<h2>Calculate Student Exact Marks Percentage with Double:</h2>
    <?php
        $mark = 92.5;
        $totalmark = 100;
        $percentage = ($mark/$totalmark)* 100;
        echo $percentage . "<br>";
    ?>
<h2>Check if the user has admin roles:</h2>
    <?php
        $adminrole = true;
        echo ($adminrole == "true")? "has admin role": "no admin role";
    ?>
<h2>Define and Display a User Name using Strings:</h2>
    <?php
        $name = "Alisson Baker";
        echo $name . "<br>";
    ?>
<h2>Check if the variable is null or not:</h2>
    <?php
        $age;
        echo (is_null($age))? "is null": "is not null";
    ?>

</body>
</html>

