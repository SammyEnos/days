<!DOCTYPE html>
<html lang="en">
<head>
    <title>Using switch case</title>
</head>
<body>

<?php

$day = date("D");

switch($day){
    case "Mon":
        # code ...
        echo "Today is Monday";
        break;
    case "Tue":
        # code ...
        echo "Today is Tuesday";
        break;
    case "Wed":
        # code ...
        echo "Today is Wednesday";
        break;
    case "Thu":
        # code ...
        echo "Today is Thursday";
        break;
    case "Fri":
        # code ...
        echo "Today is Friday";
        break;
    case "Sat":
        # code ...
        echo "Today is Saturday";
        break;
    case "Sun":
        # code ...
        echo "Today is Sunday";
        break;
    default:
        # code ...
        echo "No such day of the week";
        break;
}

?>

</body>
</html>