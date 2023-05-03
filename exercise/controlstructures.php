<!doctype html>
<html>
<head>
    <title>
        Control Structures
    </title>
</head>
<body>

    <h1>Exercise 1: Display Odd and Even Numbers</h1>
    <?php
        echo "even numbers from 0 to 100: ";
        for($num=0; $num<=100; $num++){
            if ($num%2 == 0){
                echo $num . "\t";
                $num++;
                continue;
            }
        }

        echo "<br>";
        echo "odd numbers from 0 to 100: ";
        for($num=0; $num<=100; $num++){
            if ($num%2 == 1){
                echo $num . "\t";
                $num++;
                continue;
            }
        }
    ?>

</body>
</html>