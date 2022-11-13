<?php

// get all users from the database

function get_users()
{
    global $db_connection;
    $query = 'SELECT * FROM users';
    $result = mysqli_query($db_connection, $query);
    return $result;
}


/**
 * Insert a user into the database
 * @param string $first_name
 * @param string $last_name
 * @param string $email
 * @param string $phone
 * @return object - mysqli result
 */

function add_user ($first_name, $last_name, $email, $phone)
{
    global $db_connection;
    $query = "INSERT INTO users (first_name, last_name, email, phone)";
    $query .= " VALUES ('$first_name', '$last_name', '$email', '$phone')";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

?>