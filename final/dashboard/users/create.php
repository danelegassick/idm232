<?php
$page_name = 'Create User';
include_once $_SERVER['DOCUMENT_ROOT'] . '/final/components/header.php'; 

// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';

?>

<h2>Create a user</h2>
    <form action="<?php echo site_url(); ?>/includes/process_users.php" method="POST">
        <label for="">First Name</label>
        <input type="text" name="first_name">

        <label for="">Last Name</label>
        <input type="text" name="last_name">

        <label for="">Email</label>
        <input type="text" name="email">

        <label for="">Phone Number</label>
        <input type="text" name="phone">
        
        <input type="submit" value="Submit">
    </form>

<h2>USERS</h2>




<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/final/components/footer.php';  ?>