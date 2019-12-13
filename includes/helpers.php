<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/mspr/env.php';

use Carbon\Carbon;

session_start();

function dd($var)
{
    var_dump($var);
    die();
}

function connectDB(){
    global $database;
    $host = $database ['host'];
    $name = $database ['dbname'];
    $username = $database ['username'];
    $password = $database ['password'];
    return new PDO("mysql:host=$host; dbname=$name", "$username", "$password");
}

function getDateForHumans($date){
    $c = new Carbon($date, 'Europe/Paris');
    return $c->DiffForHumans();
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
    $stmt = $dbh->prepare('SELECT * FROM users ');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getAuth()
{
    if (!isAuth()) {
        return false;
    }
    return getUser($_SESSION['auth_id']);
}

function isAuth()
{
    return isset ($_SESSION['auth_id']);
}

function getPosts(){
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT posts.*, users.first_name, users.last_name FROM posts LEFT JOIN users ON posts.user_id = users.id ORDER BY posts.created_at DESC');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getUserPosts($id){
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT posts.*, users.first_name, users.last_name FROM posts LEFT JOIN users ON posts.user_id = users.id WHERE users.id = :id ORDER BY posts.created_at DESC');
    $stmt->bindValue('id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getComment(){
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT comments.*, users.first_name, users.last_name FROM comments LEFT JOIN users ON comments.author_id = users.id ORDER BY comments.created_at DESC');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getUserComment($id){
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT comments.*, users.first_name, users.last_name FROM comments LEFT JOIN users ON comments.author_id = users.id WHERE users.id = :id ORDER BY comments.created_at DESC');
    $stmt->bindValue('id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getLike($id){
    $dbh = connectDB();
    $stmt = $dbh->prepare('INSERT INTO user_post (user_id, post_id) VALUES (:user_id, :post_id)');
    $stmt->bindValue(':user_id', $_SESSION['auth_id']);
    $stmt->bindValue(':post_id', $id);
    $stmt->execute();
}

function getLikePost($id){
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM user_post WHERE post_id = :id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
