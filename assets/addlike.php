<?php
require_once '../includes/helpers.php';

    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM  ');
    $stmt->execute();

$path = $_SERVER['HTTP_REFERER'];
header("Location: $path");