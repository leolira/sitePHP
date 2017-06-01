<?php

$host = "localhost";
$bd = "login";
$user = "root";
$pass = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=login", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
    }
catch(PDOException $e)
    {
    echo "Conexão com banco falho: " . $e->getMessage();
    }


?>