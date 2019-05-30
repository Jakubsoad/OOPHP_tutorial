<?php
require_once 'include/newclass.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>

    </title>
</head>
<body>

<form action="calc.php" method="post">
    <input type="text" name="num1"><br>

    <input type="text" name="num2"><br>

    <select name="calc">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiply</option>
    </select><br>

    <button type="submit">Calculate</button>
</form>
</body>

</html>

