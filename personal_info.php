<?php

/*
Task 1: Personal Information Page
Create a PHP file named personal_info.php that displays your personal information using variables and the echo statement. Include your name, age, country, and a brief introduction. */

$name = "Abu Sayem Amir";
$age = 30;
$country = "Bangladesh";
$brief_introduction = "I am from Birganj Upazila under Dinajpur District. I'm living in Gazipur now. I love coding and like PHP. Currently working in a private company. Along with job I am learning PHP and hope to change my career to PHP-Laravel stack after completing the OSTAD course.";

echo "My name is {$name} and age is {$age}. My country is {$country}.\n";
echo $brief_introduction;