<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 4</title>
</head>
<body>

<!-- URL query strings
starts with a question mark, at the end of the url, passes data through url, shouldnt break
data is pushed through here, transport data from one to another 
start w question mark, then have parameters (multiple parameters use the & key to break apart)

ex: ?client=firefox-b-d&channel=trow&q=mrvirk

w/ php and js you will be able to parse and manipulate this data -->

<!-- form element -->

<form action="" method="">

</form>

<!-- js and php work well with the form element, action and method are required-->

<!-- action is url for where the data is going to be sent -->

<!-- method can be a value of POST or GET, the default is GET-->

<form action="" method="GET">

<!-- will show up in your url, NO SENSITIVE INFORMATION, useful for bookmark pages -->

</form>


<form action="" method="POST">

<!-- passes information to a page to get processed, not able to be viewed by client, safer -->

</form>

<form action="process.php" method="POST">
    
    <input type="text" value="Default Value">

    <br>

    <label for="firstName">First Name</label>
    <input type="text" name="firstName" value="" id="firstName">

    <br>

    <label for="lastName">Last Name</label>
    <input type="text" name="lastName" value="" id="lastName">

    <label for="password">Password</label>
    <input type="password" value="" name="password" id="password">


    <br>


    <input type="submit" value="Submit">

</form>

<!-- GLOBAL VARIABLES -->

<?php 

$GLOBALS;
    $_SERVER;
    $_REQUEST;
    $_POST;
    $_GET;



    ?>
</body>
</html>