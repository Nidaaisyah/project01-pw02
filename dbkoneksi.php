<?php

$host = 'localhost'; 
$dbname = 'dbpuskesmas'; 
$user = 'root'; 
$pass = ''; 

$dsn = "mysql:host=$host;port=3307;dbname=$dbname";


$dbh = new PDO($dsn, $user, $pass);
