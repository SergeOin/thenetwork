<?php
require_once '../includes/helpers.php';

$data = [];
foreach ($_POST as $name => $value) {
    $data[$name] = $value;
}

$dbh = connectDB();
$stmt = $dbh->prepare('SELECT * FROM users WHERE email = :email LIMIT 1');
$stmt->bindValue(':email', $data['email']);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$id = ($user['id']);
if($user['password'] === sha1($data['password'])){
    $_SESSION['auth_id'] = $user['id'];
    header("Location: ../index.php?id=$id");
} else {
    header("Location: ../login.php");
}
