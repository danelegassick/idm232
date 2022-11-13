<?php 

include_once __DIR__ . '/../app.php';
$page_title = 'Process Users';
include_once __DIR__ . '/../_components/header.php';

//Get values from $_POST and insert into database

echo '<pre>';
var_dump($_POST);
echo '</pre>';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$query = "INSERT INTO users (first_name, last_name, email, phone) VALUES ('$first_name', '$last_name', '$email', '$phone')";
$query_results = mysqli_query($db_connection, $query);

if ($query_results) {
    //Success
    echo 'IT WORKS';
} else {
    //Fail
    echo 'EPIC FAIL';
}

?>






<?php include_once __DIR__ . '/../_components/footer.php';?>