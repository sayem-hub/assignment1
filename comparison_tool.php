<?php

/* Task 6: Comparison Tool
Develop a PHP tool named comparison_tool.php that compares two numbers and displays the larger one using the ternary operator. 
Create a form where the user can input two numbers. Use the ternary operator to determine the larger number and display the result.
Or, declare 2 variable numbers and use the ternary operator to determine the large number and display the result */


$number1 = 1000;
$number2 = 1001;

$largeNumber = ($number1 == $number2) ? "Both numbers are same number" : (($number1 > $number2) ? "$number1 is larger than $number2" : "$number2 is larger than $number1");

echo $largeNumber;

//Output: 1001 is larger than 1000