<?php
require_once '../includes/helpers.php';

$id = $_GET['id'];

$data = [];
foreach ($_POST as $name => $value){
    $data[$name] = $value;
}

$dbh = connectDB();
$stmt = $dbh->prepare("UPDATE users SET birthday = :birthday, gender = :gender WHERE id = :id");
if( $data['birthday']){
    $stmt->bindValue(':birthday', $data['birthday']);
}
$stmt->bindValue(':gender', $data['gender']);
$stmt->bindValue(':id', $id);
$stmt->execute();

header("Location: ../profile.php");
exit;
