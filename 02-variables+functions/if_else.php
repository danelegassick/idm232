<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

//if else statements
    $a = 4;
    $b = 4;
    
    if ($a > $b) {
        echo 'a is larger than b';
    } elseif ($a < $b) {
        echo 'a is smaller than b';
    } else {
        echo 'a is equal to b';
    }
// else ifs can be nested within each other (if more than 1 turn to switch case)

echo'<br>';

//switch cases
    $a = 3;

    switch ($a) {
        case 0:
            echo 'a equals 0';
            break;
        case 1:
            echo 'a equals 1';
            break;
        case 2:
            echo 'a equals 2';
            break;
        case 3:
            echo 'a equals 3';
            break;
    }

    echo'<br>';


    $month = 1;

    switch ($month) {
        case 1:
            $zodiac = 'Tiger';
            break;
        case 2:
            $zodiac = 'Ox';
            break;
        case 3:
            $zodiac = 'Slime';
            break;
    }

    echo $zodiac;

    echo '<br>';

    //loops

    $count = 0;


    //++ or -- is plus 1 or minus 1 for loops

    //while loops with if statements are valuable

    while ($count <= 10) {
        echo $count;
        echo '<br>';
        $count++; //increment by 1
    }

    //for loops

    for ($count =0; $count<=10; $count++) {
        if ($count < 10) {
            echo $count . ', ';
        } else {
            echo $count;
        }
    }

    //foreach loops BEST runs through all values 

    echo '<br>';

    $ages = [
        4, 
        8, 
        15, 
        16, 
        23, 
        42
    ];

    foreach ($ages as $age) { //first variable MUST be an array, second does not matter
        echo "Age: as {$age}<br>";
    }

    foreach ($ages as $age) { 
        if ($age >= 16) {
            echo "You can drive at {$age}! <br>";
        }
        else {
            echo "You can't drive at {$age}! <br>";
        }
    }

    //functions

    function say_hello() {
        echo 'Hello World!<br>';
    }

    function say_something($word) {
        echo "Hello {$word}<br>";
    }

    function calc_tip($total_bill, $tip_ammount) {

    }

    say_something('Cowboy!');
    say_something('Fish!');
    say_something('bruh!');


    say_hello();

    $name = 'John Doe';

    function better_hello($greeting, $target, $punct) {
        echo $greeting . ' ' . $target . $punct . '<br>';
    }
    
    better_hello('Hello', $name, '!!!');
    
    function better_hello_return($greeting, $target, $punct) {
        return $greeting . ' ' . $target . $punct . '<br>';
    }

    $result = better_hello_return('Hello', $name, ':)');
    echo $result;

    //variables in a function are local, self contained
    //variables outside of a function are global, but do not bleed into functions unless called with "global"
    

    ?>
</body>
</html>