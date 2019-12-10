<?php
require_once './env.php';

// Fonction pour debug
function dd($var){
    var_dump($var);
    die();
}

function connectDB(){
    return new PDO("mysql:host=localhost;dbname=mspr", "root", "");
}

function hasError($field){

}

/*
function getUser($id){
    $dbh = connectDB();
    $dbh->query("SELECT * FROM users WHERE id = $id LIMIT 1");
    return $dbh->fetch();
}
*/
