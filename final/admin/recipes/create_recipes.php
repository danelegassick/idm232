<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/../../app.php';
$page_title = 'Create';
include_once __DIR__ . '/../../_components/header.php';
?>
<div class="container">
<h1>Create a recipe</h1>
    <form action="<?php echo site_url(); ?>/_includes/process_create_recipes.php" method="POST">
        <label for="">Recipe Name:</label>
        <br>
        <input type="text" name="title">
        <br>
        <br>

        <label for="">Image Path:</label>
        <br>
        <input type="text" name="img-path">
        <br>
        <br>

        <label for="">Overview:</label>
        <br>
        <textarea name="overview" id="" cols="30" rows="10"></textarea>
        <br>
        <br>

        <label for="">Ingredients:</label>
        <br>
        <textarea name="ingredients" id="" cols="30" rows="10"></textarea>
        <br>
        <br>

        <label for="">Instructions:</label>
        <br>
        <textarea name="instructions" id="" cols="30" rows="10"></textarea>
        <br>
        <br>
        
        <input type="submit" value="Submit">
    </form>

</div>



<?php include_once __DIR__ . '/../../_components/footer.php';