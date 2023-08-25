<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$Fruits = array (
    array("Apple", 100, 20),
    array("Banana", 150, 80),
    array("Mangoes", 200, 120),
    array("Orange", 400, 320)
  );
  
  for ($i = 0; $i < count($Fruits); $i++) {
      for ($j = 0;  $j < count($Fruits[$i]); $j++) {
          echo $Fruits[$i][$j] . " ";
      }
      echo "<br>";
  }
?>

</body>
</html>