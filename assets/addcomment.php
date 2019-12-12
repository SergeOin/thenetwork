<?php
require_once '../includes/helpers.php';
$id = $_GET['id'];

//Définir variables
$data = [];
foreach ($_POST as $name => $value){
    $data[$name] = $value;
}

$dbh = connectDB();
$stmt = $dbh->prepare("INSERT INTO comments (content) VALUES (:content) WHERE id = :id");
$stmt->bindValue(':content', $data['content']);
$stmt->bindValue(':content', $id);
$stmt->execute();

$path = $_SERVER['HTTP_REFERER'];
header("Location: $path");
exit;
