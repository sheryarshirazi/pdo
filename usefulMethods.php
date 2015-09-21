<?php
include_once 'db/connect.php'; 

$stmt = $conn->prepare('INSERT INTO customers(name) VALUES(:name)');

$stmt->bindParam('name', $name, PDO::PARAM_STR);

$customers = array('Sheryar', 'Ahmed', 'Toufiq');

foreach ($customers as $name) {

    $stmt->execute();
    echo '<br/>' . 'Last inserted id is : ' . $conn->lastInsertId(), '';
    echo '<br/>' . 'Rows Counted : ' . $stmt->rowCount();

}

?>