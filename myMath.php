<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 


/* lets do some math */

echo 56 + 45; //will display as 101 in browser
echo "<br>"; 
echo 56 - 45; //will display as 11 in browser
echo "<br>";
echo 56 * 45; //will display as 2520 in browser
echo "<br>";
echo 56 / 45; // will display as 1.2444444444444 in browser
echo "<br>";


echo 56 + 45 * 45; // will display as 2081 in browser due to rules of PEMDAS
echo "<br>";
echo (56 + 45) * 45; // will display as 4545
echo "<br>";

$number1 = 12;
$number2 = 24;

echo $number1 * $number2; // will display as 288
echo "<br>";

?>

</body>
</html>
