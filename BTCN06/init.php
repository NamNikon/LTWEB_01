<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Conect to Database
$host = 'us-cdbr-east-04.cleardb.com';
$dbname = 'heroku_f11c9934ba1365a';
$charset = 'utf8mb4';
$userdb = 'b3b17de8cfddde';
$passdb = 'a4748d87';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$db = new PDO($dsn, $userdb, $passdb); 

require_once 'functions.php';

$curentUser = getCurrentUser();


$userPoster = getAllPoster($curentUser["id"]);