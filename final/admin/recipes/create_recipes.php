<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/../../app.php';
$page_title = 'Create';
include_once __DIR__ . '/../../_components/header.php';
?>
<div class="container">
<h1>Create a recipe</h1>
<br>
    <form action="<?php echo site_url(); ?>/_includes/process_create_recipes.php" method="POST">

        <div class="input-field">
        <input class="input-style" type="text" name="title" id="title">
        <label class="label-style" for="title">Recipe Name:</label>
        </div>
        <br>
        <br>

        <div class="input-field">
        <input class="input-style" type="text" name="img_path" id="img_path">
        <label class="label-style" for="img_path">Image Path:</label>
        </div>
        <br>
        <br>

        <label for=""><h3>Overview:</h3></label>
        <textarea name="overview" id="" cols="30" rows="10"></textarea>
        <br>
        <br>

        <label for=""><h3>Ingredients:</h3></label>
        <textarea name="ingredients" id="" cols="30" rows="10"></textarea>
        <br>
        <br>

        <label for=""><h3>Instructions:</h3></label>
        <textarea name="instructions" id="" cols="30" rows="10"></textarea>
        <br>
        <br>
        
        <input class="button" type="submit" value="Submit">
    </form>

</div>



<?php include_once __DIR__ . '/../../_components/footer.php';