<?php
require_once '../includes/helpers.php';
$id = $_GET['id'];

//Définir variables
$data = [];
foreach ($_POST as $name => $value){
    $data[$name] = $value;
}

$dbh = connectDB();
$stmt = $dbh->prepare("INSERT INTO comments (content, author_id) VALUES (:content, :author_id)");
$stmt->bindValue(':content', $data['content']);
$stmt->bindValue(':author_id', $id);
$stmt->execute();

$path = $_SERVER['HTTP_REFERER'];
header("Location: $path");
exit;
