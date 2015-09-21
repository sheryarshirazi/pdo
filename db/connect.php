<?php 

$host   = 'localhost';
$dbname = 'test';
$db_username = 'root'; 
$db_password = ''; 

$conn = new PDO(
    'mysql:host=' . $host.
    ';dbname=' . $dbname,
    $db_username,
    $db_password
);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// if above statement is commented then we get error by below two statements
// $conn->errorCode();
// $conn->errorInfo();
?>