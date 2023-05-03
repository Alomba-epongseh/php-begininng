<?php
    /*1) Create a File, Write Content and Save the File.
2) Use fopen libraries
3) Append some text in the last.*/ 
 
//mkdir("creative");
//rmdir("creative");

$creative = fopen("files.txt", "w+");

fwrite($creative,"i am an intern at creative");
fclose($creative);

file_put_contents("files.txt", "It is found in Buea", FILE_APPEND);

/*1) Read a file
2) Append some content at the last using fopen*/
$aloms = fopen("helo.php", "r+");
$fsize = filesize("helo.php");
echo fread($aloms,$fsize);
file_put_contents("helo.php", "boom", FILE_APPEND);

?>