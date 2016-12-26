<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<?php


// Switch statements are very useful. Can be used in place of "if" statements in many situations.

//For example

//$number = 4;

// if ($number < 10) {
// 	echo "this";
// }
//
// if ($number < 20) {
//	echo "this";
// }
//
// if ($number < 30) {
// 	echo "this";
// }
//
// if ($number < 40) {
//	echo "this";
// }

// so we are testing $number against different conditions. (i.e. just ONE condition against multiple values.) For each new value that I wantto test $number against, I have to write another if block.

// Switch statements can do this a bit more cleanly. See below:



$number = 34;

switch($number) {


case 34:
	echo "it is thirty-four";
	break;
case 37:
	echo "it is thirty-seven";
	break;
case 35: 
	echo "it is thirty-five";
	break;
case 24:
	echo "it is twenty-four";
	break;

default: 
	echo "we could not find anything";
	break;


}

// IMPORTANT NOTE: Lets pretend that there were no "break;" lines in the block above, we would end up with browser output reading:

//  it is thirty-fourit is thirty-sevenit is thirty-fiveit is twenty-fourwe could not find anything 

// Why is this? Well, lets think of case statements as a man sitting in a room with a big lever that controls a gate. The lever has Two positions: True (open) and False (closed). The natural position for the lever is False.

// When the man is given a clipboard of conditions to check, he will switch the lever to TRUE once he arrives at a true statement. If we gave him a clipboard with the case statement above (with no break statements), he would switch the lever to True as soon as he got to the case that was indeed true (in our case, the very first comparison). The man will continue down the list, but the gate will remain open. Now, if we introduce break statements to the list, these tell the man to reset the lever after he reads each comparison. Therefore, he would read the firt comparison, determine it to be true, switch the lever to true, thereby opening the gate, then switch the lever back to false, thus closing the gate, before moving to the next line.
 



?>

</body>
</html>
