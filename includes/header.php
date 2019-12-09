<?php require_once 'vendor/autoload.php'; ?>
<?php require_once 'includes/config.php'; ?>
<?php session_start(); ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>The Network</title>
    <link rel="stylesheet" href="./public/css/app.css">
</head>
<body>
<div id="app">
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand font-weight-bold" href="./index.php">The Network</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <form class="form-inline mr-auto ml-3 my-2 my-lg-0">
                    <input class="form-control mr-sm-2" style="width: 30vw" type="search" placeholder="Rechercher" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Rechercher</button>
                </form>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="./profile.php">Profil</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./index.php">Accueil</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main id="main">