<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statement</title>
</head>
<body>
    <p>If time is 10 AM Print Good Morning . If time is above 12 PM Print Good Afternoon . If time is above 8 Pm print good night</p>
    <?php
$time = date("H:i"); // Get the current time in 24-hour format

if ($time >= "06:00" && $time < "12:00") {
    echo "Good Morning";
} elseif ($time >= "12:00" && $time < "20:00") {
    echo "Good Afternoon";
} else {
    echo "Good Night";
}
?>
</body>
</html>