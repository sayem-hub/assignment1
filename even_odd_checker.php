<!-- Task 4: Even or Odd Checker
Build a PHP program called even_odd_checker.php that checks whether a given number is even or odd. Provide an input field where the user can enter a number. Display a message indicating whether the number is even or odd. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Odd Checker</title>
</head>

<body>
    <form action="/even_odd_checker.php" method="post">
        Enter a number:
        <input type="number" name="number">
        <input type="submit" value="Calculate"><br><br>
    </form>
</body>

</html>



<?php

if ($_POST) {
    $number = $_POST['number'];

    if (($number % 2) == 0) {
        echo "$number is an Even number";
    } else {
        echo "$number is Odd number";
    }
}

?>