<!-- Task 7: Simple Calculator
Build a PHP calculator named simple_calculator.php that performs basic arithmetic operations. Provide input fields for two numbers and a dropdown to select the operation (addition, subtraction, multiplication, division). Display the result of the chosen operation. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>

<body>
    <h1>Simple Calculator (By If else)</h1><br><br>

    <h3>Enter the numbers in the input fields to calculate</h3>

    <form action="/simple_calculator.php" method="POST">
        <input type="number" name="number1" placeholder="Input Number-1 here">
        <input type="number" name="number2" placeholder="Input Number-2 here">

        <select name="operation">
            <option value="" disabled selected>--Select Operation Type--</option>
            <option value="add">Add numbers </option>
            <option value="subtract">Subtract numbers</option>
            <option value="multiply">Multiply numbers</option>
            <option value="divide">Divide numbers</option>
        </select><br><br>

        <input type="submit" name="submit" value="Calculate"><br><br>
    </form>



    <?php
    if (isset($_POST['submit'])) {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $operation = $_POST["operation"];
        switch ($operation) {
            case 'add':
                $result = $number1 + $number2;
                echo "The Result is : $result";
                break;
            case 'subtract':
                $result = $number1 - $number2;
                echo "The Result is : $result";
                break;
            case 'multiply':
                $result = $number1 * $number2;
                echo "The Result is : $result";
                break;
            case 'divide':
                if ($number2 != 0) {
                    $result = $number1 / $number2;
                    echo "The Result is : $result";
                } else {
                    echo "Please don't divide with ZERO";
                }
                break;
            default:
                echo "Not a Valid Operation";
                break;
        }
    }
    ?>


</body>

</html>