<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>




<?php

//Functions are essential for ensuring clean, efficient code. You want to avoid copying and pasting the same code over and over again in your program when you can bottle it up once, and call it as needed.


//lets create a function called init that can be called elsewhere in our program. It does the following: performs a calculation, echos out an html line break, and echo's out some string.

function init(){

// while writing the function, I first  write the functions as below:

	// echo 456 - 345;
	// echo "<br>";
	// echo "hello";

// I then realize that I might want to write some other functions or other code blocks later where I may want to perform a calculation, so I go even further and go write a dedicated function called "calculate", and I decide to call it within this init function that I am currently creating. Yes, you call functions within functions!!

	calculate();
	echo "<br>";

// I also decide to functionalize my echo statement, and call it "say_something".

	say_Something();


}

// FYI, here is where I defined the calculate function.

function calculate(){
	echo 456 - 345;
}

// and the say_something function.

function say_Something(){

	echo "hello";


}

// ok, all done. Now, time to call the init function and do some work.my browser should display "111" and "hello".

init();


?>


</body>
</html>
