<?php
require "views/components/header.php";
require "views/components/navbar.php";

$searchQuery = $_GET['search_query'] ?? '';

if (!empty($searchQuery)) {
    $filteredPosts = array_filter($posts, function ($post) use ($searchQuery) {
        return stripos($post['name'], $searchQuery) !== false;
    });
} else {
    $filteredPosts = $posts;  
}
?>

<h1>Augļi</h1>

<form method="GET">
<label for="search_query">Nosaukums satur: </label>
  <input type="text" name="search_query" 
         value="<?= htmlspecialchars($searchQuery) ?>" class="search-input" />
  <button type="submit" class="search-button">Atlasīt</button>
</form>

<ul>
  <?php if (empty($filteredPosts)) { ?>
    <p>No results found.</p>
  <?php } else { ?>
    <?php foreach ($filteredPosts as $post) { ?>
      <li>
        <a href="show?id=<?= $post['id'] ?>">
          <?= htmlspecialchars($post['name']) ?> 
        </a>
      </li>
    <?php } ?>
  <?php } ?>
</ul>

<?php require "views/components/footer.php"; ?>
