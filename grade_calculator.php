<?php
/*
Task 3: Grade Calculator
Develop a PHP script named grade_calculator.php that computes the average of three test scores and determines the corresponding letter grade. 
Create a form where the user can input three test scores. Calculate the average and display it along with the corresponding grade (A, B, C, D, F).
Or, declare 3 variable test scores and calculate the average and display it along with the corresponding grade (A, B, C, D, F) */


$bangla = 70;
$english = 85;
$mathmetics = 85;

$avg_score = ($bangla + $english + $mathmetics) / 3;

if ($avg_score >= 80) {
    $grade = "A";
} else if ($avg_score >= 70) {
    $grade = "B";
} else if ($avg_score >= 60) {
    $grade = "C";
} else if ($avg_score >= 50) {
    $grade = "D";
} else {
    $grade = "F";
}

echo "Your grade is $grade";

//Output: Your grade is A