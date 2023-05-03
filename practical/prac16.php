<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Time</h1>
    <?php
    echo "time now is : " . time() . "<br>"; 
    ?>
    <label >Choose a timezone:</label>
    <select name="time" id="time">
        <option value="time" >choose a time zone

        </option>
        <option value="time1">Australia/Melbourne
            <?php
                date_default_timezone_set("Australia/Melbourne");
                $timeArr = time();
                //print_r($timeArr) . PHP_EOL;
                //var_dump($timeArr);

                $date = date("d/m/y  h:i:s a");
                "onclick(alert($date))";
            ?>
        </option>
        <option value="time2">America/Marigot
            <?php
                date_default_timezone_set("America/Marigot");
            ?>
        </option>
        <option value="time3">Africa/Brazzaville
            <?php
                date_default_timezone_set("Africa/Brazzaville");
            ?>
        </option>
        <option value="time4">Africa/Dakar
            <?php
                date_default_timezone_set("Africa/Dakar");
            ?>
        </option>
    </select>


</body>
</html>