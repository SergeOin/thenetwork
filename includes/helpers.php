<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/env.php';
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

function getDateForHuman($date){
    return \Carbon\Carbon::make($date)->DiffForHuman();
}

function getAvatar($user){

}
// Fonction pour debug
/*
function getUsers(){
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM users');
    $stmt -> execute();
    return $stmt =
}
*/