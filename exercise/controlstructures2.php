<!doctype html>
<html>
<head>
    <title>
        Control Structures
    </title>
</head>
<body>

    <h1>Exercise 1: Easy Table Calculator</h1>
    <?php
        $num1 = 10;
        $num2 = 30;
        $operator = "+";

        switch($operator){
            case "+":
                $result = $num1 + $num2;
                echo $result;
                break;
            case "-":
                $result = $num1 - $num2;
                echo $result;
                break;
            case "*":
                $result = $num1 * $num2;
                echo $result;
                break;
            case "/":
                $result = $num1 + $num2;
                echo $result;
                break;
            default:
                echo "invalid operand";
                break;
        }
    
    


    ?>

</body>
</html>

