<?php
require_once '../includes/helpers.php';

    $dbh = connectDB();
    $stmt = $dbh->prepare('UPDATE posts SET posts.like + 1');
    $stmt->execute();

$path = $_SERVER['HTTP_REFERER'];
header("Location: $path");