<!doctype html>
<html>
<head>
    <title>
        Expressions and Operators
    </title>
</head>
<body>

    <h1>Exercise 1: How to Use the Operators</h1>

    <h2>Add two numbers using Arithmetical Operators:</h2>
        <?php
            $num1 = 10;
            $num2 = 15;
            echo "sum is: ";
            echo $num1+$num2;
        ?>

    <h2>Find Student passed or failed using Conditional Operatos:</h2>
        <?php
            $mark = 40;
            $passmark = 50;
            $pass = ( $mark >= $passmark);
            echo ($pass)?"passed":"failed";
        ?>

    <h2>Show a number is even or odd using Comparison Operators:</h2>
        <?php
            $num = 15;
            $numtype = $num % 2;
            if ($numtype == 0){
                echo "number is even";
            }
            else{
                echo "number is odd";
            }
           // echo ($numtype)? "number is odd": "number is even";
        ?>

    <h2>Check if user has access and login rights using Logical Operators:</h2>
            <?php
                $access = true;
                $rights = false;
                echo ($access && $rights)? "user has both access and login rights": "user doesn't have both rights";
            ?>

    <h2>Assign a integer value and increment by 10 using Assignment Operator:</h2>
        <?php
            $num += 10;
            echo $num            
        ?>

</body>
</html>

