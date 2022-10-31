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
    ];

?>

<header>
        <nav class="navbar">
            <div class="logo">
                <a href="" target="_blank" rel="noopener noreferrer">sitename.</a>
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
                </div>
                <div class="cta-btn">
                    <button class="btn s-btn"><a href="">Login</a></button>
                    <button class="btn p-btn">Register</button>
                </div>
            </div>
          </nav>
    </header>