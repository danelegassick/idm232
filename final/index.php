<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
?>

<div class="home-hero">
    <h1 class="white-text">CookBook Pro</h1>
</div>

<div class="section-grid-1">
    <div class="section-text">
        <h2>Our Food</h2>
        <hr class="section-hr">
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima libero culpa nemo mollitia at inventore similique animi aperiam quos unde accusamus, obcaecati tempore atque, sunt saepe odit. Saepe, consequatur repellendus!
        </p>
    </div>
    <div class="section-img" style="background-image: url(<?php echo site_url() . '/dist/images/recipe-1.png';?>);"></div>
</div>



<?php include_once __DIR__ . '/_components/footer.php';?>