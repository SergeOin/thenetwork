<?php
require_once $_SERVER['DOCUMENT_ROOT'] . './env.php';

session_start();

function dd($var){
    var_dump($var);
    die();
}

function connectDB()
{
    global $database;
    $host = $database ['host'];
    $name = $database ['dbname'];
    $username = $database ['username'];
    $password = $database ['password'];
    return new PDO("mysql:host=$host; dbname=$name", "$username", "$password");
}

function getDateForHumans($date){
    return \Carbon\Carbon::make($date)->DiffForHumans();
}

function getUser($id){
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM users WHERE id = :id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
function getAuth(){
    if(!isAuth()){
        return false;
    }
    return getUser($_SESSION['auth_id']);
}

function isAuth(){
    return isset ($_SESSION['auth_id']);
}

$dbh = connectDB();
$query = $dbh->prepare('SELECT * from posts');
$query->execute();
$posts = $query->fetchAll();


function getAuthPost(){
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * from posts WHERE user_id = $id');
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getAuthId(){
    if(!isAuth()){
        return false;
    }
    return getAuthPost($_SESSION['auth_id']);
}