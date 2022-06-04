<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>I4GXZuri</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
    <form action="#" method="post">
        <label for="input1">Input1</label>
        <input type="text" name="value1" required>

        <label for="input2">Input2</label>
        <input type="text" name="value2" required><p><hr></p>

        <input type="radio" value="+" name="operator" required><label for="add">+</label>

        <input type="radio" value="-" name="operator" required><label for="subtract">-</label>

        <input type="radio" value="/" name="operator" required><label for="divide">/</label>

        <input type="radio" value="*" name="operator" required><label for="multiply">*</label>

        <input type="radio" value="%" name="operator" required><label for="modulos">%</label><p><hr></p>

        <input type="submit" value="Calculate" name="submit"><p><hr></p>
    </form>
    <?php
        // If the submit button has been pressed
        if(isset($_POST['submit'])) {
            // assign to the POST
            $value1 = $_POST['value1'];
            $value2 = $_POST['value2'];
            $operator = $_POST['operator'];
            // check value input
            if(is_numeric($value1) && is_numeric($value2)) {
                // Calculate result
                switch($operator) {
                    case '+':
                        $result = $value1 + $value2;
                        break;
                    case '-':
                        $result = $value1 - $value2;
                        break;
                    case '/':
                        $result = $value1 / $value2; 
                        break;
                    case '*':
                        $result = $value1 * $value2;
                        break;
                    case '%':
                        $result = $value1 % $value2;
                        break;
                }
            echo "<h1>{$value1} {$operator} {$value2} = {$result}</h1><hr>";
        } else {
            echo "<h1>Only Numeric values are allow</h1>";
        }}
    ?>
</body>
</html>