<?php
require_once '../includes/helpers.php';

//Définir variables
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
    header("Location: ../register.php?errored=true");
}

$dbh = connectDB();
$stmt = $dbh->prepare('INSERT INTO users (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)');
$stmt->bindValue(':first_name', $data['first_name']);
$stmt->bindValue(':last_name', $data['last_name']);
$stmt->bindValue(':email', $data['email']);
$stmt->bindValue(':password', sha1($data['password']));
$stmt->execute();

$id = $dbh->lastInsertId();
header("Location: ../index.php?id=$id");
exit;
