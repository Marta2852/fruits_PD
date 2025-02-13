<?php

require "Validator.php";

$pageTitle = "Izveidot augļi";

$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!Validator::string($_POST["content"], max: 50)) {
        $errors["content"] = "Augļa nosaukumam jābūt no 2 līdz 50 rakstīm garam";
    }

    if (empty($errors)) {
        $sql = "INSERT INTO fruits (name) VALUES (:name)";
        $params = ["name" => $_POST["content"]];

        $db->query($sql, $params);

        header("Location: /");
        exit();
    }
}

require "views/posts/create.view.php";
