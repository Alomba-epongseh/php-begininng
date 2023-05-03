<?php
    /*1) Print the Employee Details
2) Working Hours
3) Employee Email ID and Address
4) Check if Employer is Married or not
5) Print the Employer Last Salary Drawn using Doubles*/

$name = "Paul Walker";
$age = 45;
$contact = 678993835;
$workinghour = "08am to 08pm";
$email = "paul@gmail.com";
$lastsalary = "$20000";
$married = true;
$maritalstatus = ($married = true)? "Yes" : "No";

echo  "<h2>Employee Detail</h2> <br>";
echo "Name: $name <br>" ;
echo "Age: $age <br>";
echo "Contact: $contact <br>";
echo "Working hours: $workinghour <br>";
echo "Email: $email <br>";
echo "Last salary drawn: $lastsalary <br>";
echo "Married?  $maritalstatus <br>";