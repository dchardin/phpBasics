<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php


// so here is a normal array, and how we echo out the third entry:

$numbers = array('jim', 'spock', 'leonard');

echo $numbers[2] . "<br>";

echo "<br>";

print_r($numbers);

echo "<br>";

// now lets define an associative array

// what if you have an array of a thousand names, it would not be easy to remember which index a particular name is in. 

// when you don't care about the order of the items in your array, go ahead and use a normal array,

// but if you want to know where your data is in an array, or order matters to you, then use associative arrays.

// so here is our associative array:

$names = array("first_name" => 'donnie', "last_name" => 'hardin');

//basically, what we just did was change the name of the key from the default (which for value 'donnie' would have been 0) to "first_name".

// now lets examine its structure using the print_r function:

print_r($names);

// the structure is: Array ( [first_name] => donnie )


// I can make use of the array contents as below:

echo "<br>";

echo $names['first_name']; //echo out whatever is in the 'first_name' key of the array

echo "<br>";

echo $names['first_name']." ".$names['last_name']; //echo out whatever is in the 'first_name' key and the 'last_name' key of the array, and display them in a concatenated fashion.


?>


</body>
</html>
