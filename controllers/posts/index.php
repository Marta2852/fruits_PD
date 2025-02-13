<?php

$sql = "SELECT * FROM fruits";
$params = [];

if (isset($_GET["search_query"]) && !empty($_GET["search_query"])) {
    $search_query = "%" . $_GET["search_query"] . "%";
    $sql .= " WHERE name LIKE :search_query";  
    $params = ["search_query" => $search_query];  
}

$posts = $db->query($sql, $params)->fetchAll();

$pageTitle = "Augļi";

require "views/index.view.php";

