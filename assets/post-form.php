<?php
require_once '../includes/helpers.php';

if(!isAuth()){
    header('Location: ./login.php');
    exit;
}

$data = [];
$fields = [];
$errored = false;


// Affiche l'erreur de la valeur de name
foreach ($_POST as $name => $value){
    $errored = !$value ? true : $errored;
    $data[$name] = $value;
    $fields[$name]['old'] = $value;
    $fields[$name]['error'] = !$value ? 'Ce champ est obligatoire' : null;
}
if($errored) {
    $_SESSION['fields'] = $fields;
    header("Location: ../post-form.php?errored=true");
}

$dbh = connectDB();
$stmt = $dbh->prepare('INSERT INTO posts (img, user_id, content) VALUES (:img, :user_id, :content)');
$stmt->bindValue(':img', $data['img']);
$stmt->bindValue(':user_id', $_SESSION['auth_id']);
$stmt->bindValue(':content', $data['content']);
$stmt->execute();

$id = $dbh->lastInsertId();
$path = $_SERVER['HTTP_REFERER'];
header("Location: $path");
exit;
