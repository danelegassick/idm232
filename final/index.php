<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
?>

<div class="home-hero" style="
  background-image: linear-gradient(to bottom, rgba(255, 132, 0, 0.248), rgba(0, 0, 0, 0.52)), url(<?php echo site_url(); ?>/dist/images/recipe-12.png);">
    <div class="container">
        <h1 class="white-text">CookBook Pro</h1>
        <p class="white-text hero-text">
            Cookbook Pro offers a wide variety of options when it comes to recipes at home. With the widest variety of options, you can ensure that your meal will be great.
        </p>
        <br>
        <div class="center">
            <a href="<?php echo site_url() . '/recipes-list.php';?>" class="button center">View All Recipes</a>
        </div>
    </div>
</div>





<?php include_once __DIR__ . '/_components/footer.php';?>