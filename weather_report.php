<?php

/*Task 5: Weather Report

Create a PHP script named weather_report.php that provides weather information based on temperature. Use a variable to store the temperature. Depending on the temperature range, display messages like "It's freezing!", "It's cool.", or "It's warm."*/


$temperature_in_celsious = 14;

if ($temperature_in_celsious < 0) {
    echo "It's freezing!";
} elseif ($temperature_in_celsious >= 0 && $temperature_in_celsious < 15) {
    echo "It's cool.";
} elseif ($temperature_in_celsious >= 15 && $temperature_in_celsious < 25) {
    echo "It's warm.";
} else {
    echo "It's hot!";
}

//Output is: It's cool.