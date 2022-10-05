<?php

include 'test.php';

// Casing

$item = 'Item';

//camelCase

$myVariable = 'some string';

$my_variable = 'some string';

echo "<br>";

echo $item;

//PHP supports the following data types:
//String
//Integer
//Float (floating point numbers - also calle double)
//Boolean
//Array
//Object
//NULL

echo "<br>";

$x = 4208; 

var_dump($x);

//Arrays

$cars = [
    "volvo",
    "bmw",
    "toyota"
];

var_dump($cars);

echo "<br>";



$greeting = 'Hello';
$target = 'World';
$phrase = $greeting . $target;
echo $phrase; //HelloWorld

echo "<br>";


$phrase = $greeting . ' ' . $target . '!';
echo $phrase; //Hello World!

echo "<br>";



echo 'String\'s apostrophe ';
echo '"hi"';
echo "\"hi\""




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hii</h1>

    <button>Click me!</button>
</body>
</html>