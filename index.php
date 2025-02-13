<?php

$config = require 'config.php';

require_once 'Database.php'; 
require_once 'functions.php'; 

$db = new Database($config["database"]);

require 'router.php';
?>