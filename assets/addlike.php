<?php
require_once '../includes/helpers.php';

getLike($_GET['id']);

$path = $_SERVER['HTTP_REFERER'];
header("Location: $path");