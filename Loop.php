<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Loop</title>
</head>
<body>
    <h1>While loop</h1>
    <?php
$x = 0;

while($x <= 100) {
  echo "The number is: $x <br>";
  $x+=5;
}
?>
<h1>Do While loop</h1>
<?php 
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>
<h1>For Loop</h1>
<?php
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
?>
<h1>Foreach Loop</h1>
<?php
$age = array("balaji"=>"20", "kathir"=>"22", "Binu"=>"23");

foreach($age as $x => $val) {
  echo "$x age is $val<br>";
}
?>


</body>
</html>