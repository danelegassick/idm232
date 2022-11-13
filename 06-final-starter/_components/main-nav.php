<?php

    $main_navigation = [
        [
            'title' => 'search',
            'url' => 'search.php'
        ],
        [
            'title' => 'categories',
            'url' => 'categories.php'
        ],
        [
            'title' => 'my recipes',
            'url' => 'categories.php'
        ],
        [
            'title' => 'account',
            'url' => 'account.php'
        ],
        [
            'title' => 'dashboard',
            'url' => 'dashboard/users/create.php'
        ],
        [
            'title' => 'recipe details',
            'url' => "recipe-details.php"
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
        <!-- <nav class="navbar">
            <div class="logo">
                <a href="index.php" target="_blank" rel="noopener noreferrer">sitename.</a>
            </div>
            <div class="nav-left">
                <div class="nav-link">
                    <ul>
                        <?php
                        //check if main_navigation exists
                        if (isset($main_navigation)) {
                            // loop through navigation array and output html
                            foreach ($main_navigation as $item_array) {
                                echo "<li><a href='$item_array[url]'>$item_array[title]</a></li>";
                            }
                        }
                        
                        ?>
                    </ul>
                    <div class="hamburger">
                        <div class="line line1"></div>
                        <div class="line line2"></div>
                        <div class="line line3"></div>
                    </div>
                </div>
                <div class="cta-btn">
                    <button class="btn s-btn"><a href="">Login</a></button>
                </div>
            </div>
          </nav> -->
    </header>