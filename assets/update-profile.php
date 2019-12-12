<?php
require_once '../includes/helpers.php';

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
$stmt = $dbh->prepare('UPDATE users SET (:birthday, :gender,)');
$stmt->bindValue(':birthday', $data['birthday']);
$stmt->bindValue(':gender', $data['gender']);
$stmt->execute();


$id = ($user['id']);
$id = $dbh->lastInsertId();
header("Location: ../profile.php");
exit;