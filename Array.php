<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Simple Array</h1>
<?php
$Fruits = array("Apple", "Banana", "Mangoes");
echo "I like " . $Fruits[0] . ", " . $Fruits[1] . " and " . $Fruits[2] . ".";
?>
<h1>Count the number of element in Array (apple,banana,mangoes)</h1>
<?php
$Fruits = array("Apple", "Banana", "Mangoes");
echo count($Fruits);
?>
<h1>Loop Through an Indexed Array</h1>
<?php
$Fruits = array("Apple", "Banana", "Mangoes");
$arrlength = count($Fruits);

for($x = 0; $x < $arrlength; $x++) {
  echo $Fruits[$x];
  echo "<br>";
}
?>
<h1>Loop Through an Associative Array</h1>
<?php
$Fruitsqulity = array("Apple"=>"100", "Banana"=>"150", "Mangoes"=>"300");

foreach($Fruitsqulity as $x => $x_value) {
  echo "Fruits =" . $x . ", Quality =" . $x_value;
  echo "<br>";
}
?>
<h1>Multidimensional Arrays</h1>
<?php
$Fruits = array (
  array("Apple",100,20),
  array("Banana",150,80),
  array("Mangoes",200,120),
  array("Orange",400,320)
);
  
echo $Fruits[0][0].": In stock: ".$Fruits[0][1].", sold: ".$Fruits[0][2].".<br>";
echo $Fruits[1][0].": In stock: ".$Fruits[1][1].", sold: ".$Fruits[1][2].".<br>";
echo $Fruits[2][0].": In stock: ".$Fruits[2][1].", sold: ".$Fruits[2][2].".<br>";
echo $Fruits[3][0].": In stock: ".$Fruits[3][1].", sold: ".$Fruits [3][2].".<br>";
?>
$Fruits = array (
  array("Apple", 100, 20),
  array("Banana", 150, 80),
  array("Mangoes", 200, 120),
  array("Orange", 400, 320)
);

for ($i = 0; $i < count($Fruits); $i++) {
    echo $Fruits[$i][0] . ": In stock: " . $Fruits[$i][1] . ", sold: " . $Fruits[$i][2] . ".<br>";
}

</body>
</html>