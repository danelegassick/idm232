<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/../../app.php';
$page_title = 'Create';
include_once __DIR__ . '/../../_components/header.php';
?>

<h2>Create a user</h2>
    <form action="<?php echo site_url(); ?>/_includes/process_users.php" method="POST">
        <label for="">First Name:</label>
        <input type="text" name="first_name">
        <br>
        <br>

        <label for="">Last Name:</label>
        <input type="text" name="last_name">
        <br>
        <br>

        <label for="">Email:</label>
        <input type="text" name="email">
        <br>
        <br>

        <label for="">Phone Number:</label>
        <input type="text" name="phone">
        <br>
        <br>
        
        <input type="submit" value="Submit">
    </form>

<h2>USERS</h2>



<?php include_once __DIR__ . '/../../_components/footer.php';
