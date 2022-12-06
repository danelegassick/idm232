<?php

    $main_navigation = [
        [
            'title' => 'search',
            'url' => site_url() . '/admin/search/search-general.php'
        ],
        [
            'title' => 'dashboard',
            'url' => site_url() . '/admin/recipes'
        ],
        [
            'title' => 'recipes',
            'url' => site_url() . '/recipes-list.php'
        ],
        [
            'title' => 'create recipes',
            'url' => site_url() . "/admin/recipes/create_recipes.php"
        ],
    ];

?>

<header>
<div class="nav-background">
    <nav>
      <div id="logo">
        <a class='link white-text' href="<?php echo site_url(); ?>/index.php">
          cookbook pro
        </a>
      </div>
      <ul class="nav_links">
        <?php
                        //check if main_navigation exists
                        if (isset($main_navigation)) {
                            // loop through navigation array and output html
                            foreach ($main_navigation as $item_array) {
                                echo "<li class='no-styles'><a class='link white-text' href='$item_array[url]'>$item_array[title]</a></li>";
                            }
                        }
                        
                        ?>
      </ul>
      <div class="hamburger">
        <div class="line line1"></div>
        <div class="line line2"></div>
        <div class="line line3"></div>
      </div>
    </nav>
</div>
</header>