<?php
// How to include files dynamically:
// include_once $_SERVER['DOCUMENT_ROOT'] . '/final/components/example.php';  

$page_name = 'Home';
include_once $_SERVER['DOCUMENT_ROOT'] . '/final/components/header.php'; 

$db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_name = 'local_idm232';

$connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

	
if (mysqli_connect_errno()) {
    die('Database connection failed: ' .
        mysqli_connect_error() . 
        ' (' . mysqli_connect_errno . ')'
    );
}

//Read the data from the database from the users table

$query = 'SELECT * FROM users';
$results = mysqli_query($connection, $query);

if(!$results) {
    die('Database query failed. ' . mysqli_error($connection));
} 

while ($user = mysqli_fetch_array($results)) {
    echo '<pre>';
    var_dump($user);
    echo '</pre>';

    echo '<hr>';

    echo '<h2>' . $user['first_name'] . ' ' . $user['last_name'] . '</h2>';

    echo '<hr>';
}

?>

<?php $assignment_one = 'Assignment - 01'; ?>

<h1><?php echo $assignment_one; ?></h1>
    
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/final/components/footer.php'; 
 ?>
