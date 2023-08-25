<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switchcase in php</title>
</head>
<body>
    <h1>Print the current day Using of Switch Case statement in php</h1>
<?php
$dayOfWeek = date("N"); // Get the current day of the week (1 = Monday, 2 = Tuesday, ..., 7 = Sunday)

switch ($dayOfWeek) {
    case 1:
        echo "It's Monday!";
        break;
    case 2:
        echo "It's Tuesday!";
        break;
    case 3:
        echo "It's Wednesday!";
        break;
    case 4:
        echo "It's Thursday!";
        break;
    case 5:
        echo "It's Friday!";
        break;
    case 6:
        echo "It's Saturday!";
        break;
    case 7:
        echo "It's Sunday!";
        break;
    default:
        echo "Invalid day of the week.";
        break;
}
?>

</body>
</html>