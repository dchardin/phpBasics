<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

// Here are the comparison operators:
//
// equal ==
// identical ===
// compare > < >= <= <> (the <> means "less than or greater than")
// not equal !=
// not identical !==
//
// Here are the logical operators
//
//
// And &&
// Or ||
// Not !


$x = "4";

if ($x < 4) {
	echo "The variable is set to $x and is less than 4";
	echo "</br>";
}

if ($x == 4) {
	echo "The variable is set to $x and is equal to 4, regardless of datatype";
	echo "</br>";
}
 
if ($x != 4) {
	echo "The variable is set to $x and is not equal to 4, regardless of datatype";
	echo "</br>";
}

if ($x === 4) {
	echo "The variable is set to $x and is equal to 4, and of the same datatype";
	echo "</br>";
}

if ($x == 4 || $x == 5) {
	echo "The variable is set to $x and is either 4 or 5, regardless of datatype";
	echo "</br>";
}



?>

</body>
</html>
