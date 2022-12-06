<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Search';
include_once __DIR__ . '/../../_components/header.php';
$recipes = get_recipes();

// Check if search exist in query
if (isset($_GET['search'])) {
    $search = $_GET['search'];
} else {
    $search = '';
}

$query = 'SELECT *';
$query .= ' FROM recipes';
$query .= " WHERE title LIKE '%{$search}%'";
$query .= " OR overview LIKE '%{$search}%'";
$query .= " OR ingredients LIKE '%{$search}%'";
$query .= " OR instructions LIKE '%{$search}%'";
$results = mysqli_query($db_connection, $query);

// Check if was have more than 0 results from db
if ($results->num_rows > 0) {
    $recipes_results = true;
} else {
    $recipes_results = false;
}

?>

<div class="container">

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <!-- <?php include __DIR__ . '/../../_components/navigation-admin.php'; ?> -->
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1>Search Results</h1>
        <form action="<?php echo site_url(); ?>/admin/search/search-general.php" method="GET">
          <input type="text" name="search" id="search" placeholder="Search"
            value="<?php echo $search; ?>">
          <button class="button" type="submit">Search</button>
        </form>
        <h2>You searched for "<?php echo $search; ?>"</h2>
        <?php
        // If no results, echo no results
        if (!$recipes_results) {
            echo '<p>No results found</p>';
        }
?>
        <?php
// If error query param exist, show error message
  if (isset($_GET['error'])) {
      echo '<p>' . $_GET['error'] . '</p>';
  }?>
      </div>
    </div>

    <?php

    $site_url = site_url();

    // If we have results, show them
      if ($recipes_results) {
          while ($recipes_results = mysqli_fetch_assoc($results)) {
              echo "
              <div class='recipe-block'>
              <div class='recipe-block-grid'>
                <img src='{$site_url}{$recipes_results['img_path']}' class='table-img'>
                <div class='recipe-block-text'>
                  <h2><a class='link' href='{$site_url}/admin/recipes/recipe-details.php?id={$recipes_results['id']}'>{$recipes_results['title']}</a></h2>
                  <p>{$recipes_results['overview']}</p>
                </div>
              </div>
            </div>
            <hr>";
          }
      }
?>
</div>

  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';
?>