<?php

$host = 'localhost';
$banco = 'ecologico';
$user = 'root';
$pass = '';

$con = new PDO("mysql: host=".$host."; dbname=".$banco.";", $user, $pass);