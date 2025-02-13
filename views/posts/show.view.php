<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<h1><?= htmlspecialchars($post["name"]) ?></h1>

<a href="edit?id=<?= $post["id"] ?>">
    <button>
        Rediģēt
    </button>
</a>

<form action="/delete" method="POST">
    <input type="hidden" name="id" value="<?= $post["id"] ?>">
    <button type="submit">
        Dzēst
    </button>
</form>

<?php require "views/components/footer.php" ?>