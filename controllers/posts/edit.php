<?php

require "Validator.php";

$pageTitle = "Edit";

if (!isset($_GET["id"])) {
    header("Location: /"); 
    exit();
}

$postID = $_GET["id"];

$post = $db->query("SELECT * FROM fruits WHERE id = ?", [$postID])->fetch();

if (!$post) {
    header("Location: /");
    exit();
}

$content = $post["name"];
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $content = trim($_POST["content"] ?? "");

    if (!Validator::string($content, max: 50)) {
        $errors["content"] = "Augļa nosaukumam jābūt no 2 līdz 50 rakstzīmēm garam";
    }

    if (empty($errors)) {
        $sql = "UPDATE fruits SET name = :content WHERE id = :id";
        $db->query($sql, ["content" => $content, "id" => $postID]);

        header("Location: /show?id=" . $postID);
        exit();
    }
}


require "views/posts/edit.view.php"; 

