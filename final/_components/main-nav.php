<?php

    $main_navigation = [
        [
            'title' => 'search',
            'url' => site_url() . '/search.php'
        ],
        [
            'title' => 'categories',
            'url' => site_url() . '/categories.php'
        ],
        [
            'title' => 'my recipes',
            'url' => site_url() . '/categories.php'
        ],
        [
            'title' => 'account',
            'url' => site_url() . '/account.php'
        ],
        [
            'title' => 'dashboard',
            'url' => site_url() . '/dashboard/users/create.php'
        ],
        [
            'title' => 'recipe details',
            'url' => site_url() . "/recipe-details.php"
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
        <a href="<?php echo site_url(); ?>/index.php">
          <h1>sitename.</h1>
        </a>
      </div>
      <ul class="nav_links">
        <?php
                        //check if main_navigation exists
                        if (isset($main_navigation)) {
                            // loop through navigation array and output html
                            foreach ($main_navigation as $item_array) {
                                echo "<li class='no-styles'><a href='$item_array[url]'>$item_array[title]</a></li>";
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