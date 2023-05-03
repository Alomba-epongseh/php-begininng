<!doctype html>
<html>
<head>
    <title>
        Constants
    </title>
</head>
<body>

    <h1>Exercise 1: Define and Display Constants</h1>
    <?php
        define("NAME","Acha Stacy");
        const AGE = "20";
        echo "I am called " . NAME . " and i am " . AGE . "years old" ;
    ?>

    <h2>String Constant:</h2>
    <?php 
        define("GENDER", "female");
        echo "I am a " . GENDER;
    ?>

    <h2>Integer Constant:</h2>
        <?php
            const HEIGHT = 60;
            echo " And I am " . HEIGHT . "cm tall."
        ?>

    <h2>Print Constant from Function:</h2>
        <?php
            function multiply(){
                define("NUM1", 5);
                define("NUM2", 4);
                define("RESULT", NUM1*NUM2);

                echo RESULT;
            }
            multiply();
        ?>
    <h2>Display Magic Constant:</h2>
        <?php
            echo __LINE__;
            echo __FUNCTION__;
            echo __NAMESPACE__;
        ?>

</body>
</html>

