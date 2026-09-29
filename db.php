<?php

$host = "sql212.infinityfree.com";
$dbname = "ifo_43033250_online_painting";
$username = "if0_43033250";
$password = "wYZdePMlKqGX21";

try {

    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {

    die("Database connection failed: " . $e->getMessage());
}
?>