<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Two Numbers</title>
</head>
<body>
    <form action="" method= "POST">
        <h1>SUM OF TWO NUMBERS</h1>
        <h2>Enter Two Numbers</h2>
        <p>
            <label for="first number">First Number</label>
            <input type="number" name="num1">
        </p>
        <p>
            <label for="second number">Second number</label>
            <input type="number" name="num2">
        </p>
        <p>
            <button type="submit" name="sum">Sum</button>
        </p>
    </form>
    
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") 
    {
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$sum = $num1 + $num2;
    }
     echo " The sum of $num1 and $num2 is $sum";
?>