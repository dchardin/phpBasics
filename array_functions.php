<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

$list = [323,2342,454,234,6545,675,978,345];

// here are a few array functions

echo "here is the highest value in our array via the max function:";
echo "<br>";
echo max($list);
echo "<br>";
echo "<br>";

echo "here is the lowest value in our array via the min function:";
echo "<br>";
echo min($list);
echo "<br>";
echo "<br>";

echo "lets print our our array with the print_r function:";
echo "<br>";
print_r($list);
echo "<br>";
echo "<br>";

echo "lets sort the values in our array with the sort function:";
echo "<br>";
sort($list);
print_r($list);
echo "<br>";
echo "<br>";

?>


</body>
</html>
