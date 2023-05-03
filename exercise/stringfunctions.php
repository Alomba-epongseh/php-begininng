<!doctype html>
<html>
<head>
    <title>
        Strings
    </title>
</head>
<body>

<h1>Exercise 1: String Functions</h1>

<h2>Find the Given Word in the String (Case Insensitive)</h2>
    <?php
        $string = " i woke up this morning to see how to continue studying this course and to see how 
        i can round up with it and start something new. but i am so tired and need to go rest";
        $text = "morning";
        echo stripos($string, $text);
    ?>

<h2>Calculate the Length of the String</h2>
    <?php
        $string = " i woke up this morning to see how to continue studying this course and to see how 
        i can round up with it and start something new. but i am so tired and need to go rest";
        $text = "morning";
        echo strlen($string);
    ?>


<h2>Remove White Spaces from left in the String</h2>
    <?php
        $string = "     i woke up this morning to see how to continue studying this course and to see how 
        i can round up with it and start something new. but i am so tired and need to go rest";
        $text = "morning";
        echo $string . "<br>";
        echo ltrim($string);
    ?>

<h2>Reverse the String</h2>
    <?php
        $string = " i woke up this morning to see how to continue studying this course and to see how 
        i can round up with it and start something new. but i am so tired and need to go rest";
        $text = "morning";
        echo strrev($string);
    ?>
<h2>Word Wrap the Long String</h2>
    <?php
        $string = " i woke up this morning to see how to continue studying this course and to see how 
        i can round up with it and start something new. but i am so tired and need to go rest";
        $text = "morning";
        echo wordwrap($string, 50);
    ?>

<h2>Find and Replace the word in upper case</h2>
    <?php
        $string = " i woke up this morning to see how to continue studying this course and to see how 
        i can round up with it and start something new. but i am so tired and need to go rest";
        $text = "morning";
        $word = stripos($string, $text);
        echo strtoupper($text);
    ?>

<h2>Count number of words</h2>
    <?php
        $string = " i woke up this morning to see how to continue studying this course and to see how 
        i can round up with it and start something new. but i am so tired and need to go rest";
        $text = "morning";
        echo str_word_count($string);
    ?>

<h2>Shuffle the Strings</h2>
    <?php
        $string = " i woke up this morning to see how to continue studying this course and to see how 
        i can round up with it and start something new. but i am so tired and need to go rest";
        $text = "morning";
        echo str_shuffle($string);
    ?>


</body>
</html>

