<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions in php</title>
</head>
<body>
    <h1>print hello world</h1>
<?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function
?>
<h1>Function Argument</h1>
<?php
function familyName($fname) {
  echo "$fname <br>";
}

familyName("prashanth");
familyName("kathir");
familyName("hari");
familyName("balaji");
familyName("joeal");
?>
<h1>PHP Default Argument Value</h1>
<?php  
function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
?>
<h1>PHP Functions - Returning values</h1>
<?php 
function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
?>
    
</body>
</html>