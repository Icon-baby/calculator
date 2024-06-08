<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : null;
    $num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : null;
    $operation = $_POST['operation'];

    $result = null;
    $error = null;

    switch ($operation) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            if ($num2 == 0) {
                $error = "Cannot divide by zero.";
            } else {
                $result = $num1 / $num2;
            }
            break;
        case "exponentiate":
            $result = pow($num1, $num2);
            break;
        case "percentage":
            $result = ($num1 / 100) * $num2;
            break;
        case "sqrt":
            if ($num1 < 0) {
                $error = "Cannot take the square root of a negative number.";
            } else {
                $result = sqrt($num1);
            }
            break;
        case "log":
            if ($num1 <= 0) {
                $error = "Logarithm input must be greater than zero.";
            } else {
                $result = log($num1);
            }
            break;
        default:
            $error = "Invalid operation selected.";
            break;
    }

    if ($error) {
        echo "<p>Error: $error</p>";
    } else {
        echo "<p>The result is: $result</p>";
    }
    echo "<a href='index.php'>Go back</a>";
}
?>
