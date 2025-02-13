<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1>Izveidot augļi</h1>

<form method="POST">

    <label>
        <textarea name="content"></textarea>
    </label>

    <?php if(isset($errors["content"])) { ?>
        <p><?= $errors["content"] ?></p>
    <?php } ?>

    <button type="submit" >
        Saglabāt
    </button>
</form>



<?php require "views/components/footer.php"; ?>