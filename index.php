<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Calculator</h1>
    <form action="calculate.php" method="post">
        <input type="number" name="num1" step="any" required placeholder="Enter first number">
        <input type="number" name="num2" step="any" placeholder="Enter second number (if required)">
        <select name="operation">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
            <option value="exponentiate">Exponentiation</option>
            <option value="percentage">Percentage</option>
            <option value="sqrt">Square Root (uses only first number)</option>
            <option value="log">Logarithm (uses only first number)</option>
        </select>
        <button type="submit">Calculate</button>
    </form>
</body>
</html>
