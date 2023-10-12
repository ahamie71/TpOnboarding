<?php
function databaseConnect()
{

    $username = "root";
    $servername = "localhost";
    $password = "password";

    try {
        $dbconnect = new PDO("mysql:host=$servername;dbname=lunettes", $username, $password);
        $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbconnect;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
