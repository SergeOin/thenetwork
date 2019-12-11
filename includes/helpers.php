<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/mspr/env.php';
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

function getUsers(){
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM users');
    $stmt -> execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function isAuth(){
    return isset($_SESSION['auth_id']);
}

function getAuth(){
    if(!isAuth()){
        return false;
    }
    return getUser($_SESSION['auth_id']);
}

function getAuthId(){
    $auth = getAuth();
    return $auth['id'];
}