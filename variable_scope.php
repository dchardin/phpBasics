<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

$x = "iAmOutside"; //global





function convert() {

/* If I were to uncomment the line below, $x would be a local variable, since
   it is defined inside of a function */

//	$x = "iAmInside"; //local


/* but since I am leaving it commented, consider this; function convert has no
knowldedge of $x. It does not know that it exists, nor that we have set it to the name "iAmOutside". Now, if we want to bring that global variable into our function and manipulate it, we can do that with the "global" keyword. See below*/


	global $x;

	$x = "inside";

}

convert();

echo $x;

echo "<br>";


?>



</body>
</html>
