<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1>Rediģēt augļi</h1>

<form method="POST">
    <input type="hidden" name="id" value="<?= $post['id'] ?>">

    <label for="content">Nosaukums:</label>
    <textarea name="content" id="content" required><?= htmlspecialchars($content) ?></textarea>

    <?php if (isset($errors["content"])) { ?>
        <p><?= $errors["content"] ?></p>
    <?php } ?>

    <br><br>
    <button type="submit">Saglabāt</button>
</form>


<?php require "views/components/footer.php"; ?>
