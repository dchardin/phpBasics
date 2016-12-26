<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

// With other function examples, I likely used "echo" within the function to get the resulting values. However, this can be limiting. 

//Instead, lets "return" the resulting data. In a sense, we are sort of "variableizing" our function call. For example, If I call the "addNumbers" function as written below like this: addNumbers(100,20), it could be said that the function addNumbers(110,20) == 120. 

//In the same manner that I might have $x = 2, and echo $x would make the browser display 2, I could do "echo addNumbers(100,200);" and the browser would would display 300

//Lots of doors are open to us now.


function addNumbers($number1,$number2){

	$sum = $number1 + $number2;

	return $sum;


}

$result = addNumbers(43,45);

echo $result;
echo "<br>";

$result = addNumbers(100,$result);

echo $result;


?>


</body>
</html>
