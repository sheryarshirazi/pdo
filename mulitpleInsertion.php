<?php 

include_once 'db/connect.php'; 

$stmt = $conn->prepare('INSERT INTO customers(name) VALUES(:name)');

$stmt->bindParam('name', $name, PDO::PARAM_STR);

$customers = array('Sheryar', 'Shafiq', 'Toufiq');

foreach ($customers as $name) {
    $stmt->execute();
}
?>