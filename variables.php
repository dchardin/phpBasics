<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php


//note that, to set variables in php, I do not have to specify a data type.
//I just put a $ right in front of the name that I want to use.

$name = "Donnie";

//note, when I set a variable to a number, I do not quote the number.

$number = 100;

//try to start your variables with lower case letters.
//
//since I am coming from the unix way of things, I am not prone to including
//spaces in my variable names, nor do I put dashes or other funny characters (except underlines) in my variable names. I am also privy to case sensitivity.

// If I were to set my variable like this:

$anotherNumber = "200"; 

// the number will be treated as a string, so dont quote them unless you really mean it.


// lets concatenate

echo $name ." ". $number;

// check this out: you can even include html in variables

$nameTwo = "<h1>Hello</h1>";

echo $nameTwo;





?>


</body>
</html>
