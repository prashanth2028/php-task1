<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators in php</title>
</head>
<body>
    <h1>Arithmetic operators</h1>
    <p>Adding 10 and 6</p>
    <?php
$x = 10;
$y = 6;

echo $x + $y;
?>
<p>Subtraction 10 and 6</p>
<?php
$x = 10;
$y = 6;

echo $x - $y;
?>
<p>multipy 10 and 6</p>
<?php
$x = 10;
$y = 6;

echo $x * $y;
?>
<p>Division 10 and 6</p>
<?php
$x = 10;
$y = 6;

echo $x / $y;
?>
<p>Modulus 10 and 6</p>
<?php
$x = 10;
$y = 6;

echo $x % $y;
?>
<p>Exponentiation 10 and 6</p>
<?php
$x = 10;
$y = 6;

echo $x ** $y;
?>

<h1>Assignment Operators</h1>
<p>adding $x=20 with $x+ =100</p>
<?php
$x = 20;
$x += 100;

echo $x;
?>
<p>subtracting $x =50 with $x -=30</p>
<?php
$x = 50;
$x -= 30;

echo $x;
?>
<p>Multiplication $x =5 with $x*=6 </p>
<?php
$x = 5;
$x *= 6;

echo $x;
?>
<p>Division $x=10 with $x /=5</p>
<?php
$x = 10;
$x /= 5;

echo $x;
?>
<p>Modulus $x=15 with $x %=4</p>
<?php
$x = 15;
$x %= 4;

echo $x;
?>

<h1>Comparison Operators</h1>
<p>Returns true if $x is equal to $y</p>
<?php
$x = 100;
$y = "100";

var_dump($x === $y); // returns false because types are not equal
?>
<p>	Returns true if $x is equal to $y, and they are of the same type</p>
<?php
$x = 100;
$y = 100;

var_dump($x === $y); // returns false because types are not equal
?>
<h1>Increment / Decrement Operators</h1>
<p>Increments $x by one, then returns $x</p>
<?php
$x = 10;  
echo ++$x;
?>  





</body>
</html>