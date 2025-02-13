<?php

require "Validator.php";  


$postID = $_POST["id"] ?? null;

if (!Validator::number($postID, 1)) {
    header("Location: /");
    exit();
}

$sql = "DELETE FROM fruits WHERE id = :id";
$db->query($sql, ["id" => $postID]);  

header("Location: /");
exit();