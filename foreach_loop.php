<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php


//foreach statements are great for getting info out of an array. Think about it,
//if you were to use a while loop, you would have to know already exactly how long
//the array is.

$numbers = array(234,34534,234,324,45,3445,234,2333);


foreach($numbers as $number){

echo $number."<br>";


}



?>

</body>
</html>
