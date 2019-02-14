<?php 
// include 'include/parent.php';
// include 'include/new.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOPHP</title>
</head>
<body>
    

<form action="calc.php" method="POST">
    <input type="text" name="num1">
    <input type="text" name="num2">
    <select name="calc">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiply</option>
    </select>
    <button type="submit">Calculate </button>
</form>


</body>
</html>