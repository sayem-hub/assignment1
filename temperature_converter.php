<!--Task 2: Temperature Converter
Design a PHP program called temperature_converter.php that converts temperatures between Celsius and Fahrenheit. Provide a form where the user can input a temperature value and select the conversion direction (Celsius to Fahrenheit or vice versa). Display the converted temperature. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>

<body>
    <h1>Temperature Converter</h1><br><br>

    <h3>Enter the temperature in the box</h3>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="number" name="temperature" placeholder="Input temperature here">

        <select name="units">
            <option value="" disabled selected>--Select Convertion Type--</option>
            <option value="c">Celcius to Fahrenheit</option>
            <option value="f">Fahrenheit to Celcius</option>
        </select><br><br>

        <input type="submit" name="submit" value="CONVERT"><br><br>
    </form>


    <?php
    if (isset($_POST['submit'])) {

        $temperature = $_POST['temperature'];
        $units = $_POST['units'];

        if ($units == "c") {

            $result = $temperature * 9 / 5 + 32;
            echo "$temperature degree Celcius = " . $result . " degree Farenheit";

        } else {

            $result = ($temperature - 32) * 5 / 9;
            echo "$temperature degree Farenheit = " . $result . " degree Celcius";

        }
    }
    ?>

</body>

</html>