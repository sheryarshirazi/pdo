<?php

include_once 'db/connect.php';

$name = '%e%';


$stmt = $conn->prepare('SELECT * FROM customers WHERE name LIKE :name');
$stmt->setFetchMode(PDO::FETCH_ASSOC); 

# bindParam
// $stmt->bindParam(':name', $name, PDO::PARAM_STR); 

# bindValue
$stmt->bindValue(':name', $name); 

$stmt->execute();

while ($row = $stmt->fetch()) {
    echo '<pre>',print_r($row,true),'</pre>'; 
}
