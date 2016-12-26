<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php


// we will be using the array function here. Lets assign $numberList an array function.
//
//

$numberList = array(23,64,345,54,'5643', 345,'<h1>hello</h1>');


//arrays are indexed as "0,1,2,3...and so on. Therefore, if you want to know what the first item in the array is, you should know that it is at index 0 (not 1)



//the below line will not work. you have to specify your index for the item in the array you want.

//echo $numberList;

//therefore, you should do it like this:


echo $numberList[0];


//lets look at the print_r function.

print_r($numberList);

//  read up on the print_r function. For now, we will use it to see what the structure of our array actually looks like.

// it looks like this in browser: Array ( [0] => 23 [1] => 64 [2] => 345 [3] => 54 [4] => 5643 [5] => 345 [6] =>




?>



</body>
</html>
