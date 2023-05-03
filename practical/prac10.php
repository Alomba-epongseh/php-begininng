<?php
    /*1) Find a Length of a String
2) Find a Field inside the String
3) Write a Documentation about your program using heredoc
4) Show some examples of String Functions.*/

$name = 'John Walker';
echo strlen($name) . "<br>";
echo stripos($name , 'w') . "<br>";

$doc = <<< DOC
    i am a young aspiring lady who wants to go further in tech.
    i'm a computer student at the university of bamenda and presently an intern at creative infiny, buea.
    i currently am taking a php course to help better my skills.
DOC;

echo $doc;
