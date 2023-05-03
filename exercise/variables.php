<!doctype html>
<html>
<head>
    <title>
        Variables
    </title>
</head>
<body>

    <h1>Exercise 1: Create and Display Variables</h1>
        <?php
            $name = 'Samuel';
            $age = 35;
            $faith = 'Presbyterian';

            echo "My name is $name  ,I am  $age years old and I am a $faith";
        ?>

    <h2>String Variable:</h2>
        <?php
            $first_name ="Tita";
            $last_name = "Ernest";
            echo $first_name . $last_name;
        ?>

    <h2>Integer Variable:</h2>
        <?php
            $age = 50;
            $height = 60.2;
            echo "I am $age old and $height cm tall";
        ?>

    <h2>Print Variable from Function:</h2>
        <?php
            function sum($x1, $x2){
                $value = $x1 + $x2;
                echo "$value";
            }
            sum(10, 15);
        ?>
    <h2>Static Variable:</h2>
            <?php
                static $name = "John";
                echo $name;
                $name = $name . "n";
                echo $name;
            ?>

    <h2>Global Variable:</h2>
            <?php
                global $age;
                $age = 20;
                echo $age;
                $age = 30;
                echo $age;
            ?>

    <h2>Super Global Variable:</h2>
            <?php
                
            ?>

    <h2>Variables of Variables:</h2>
        <?php
           $name = 'Tita Ernest';
           $gender = 'name';
       
           echo "${$gender}";
        ?>

</body>
</html>

