<?php

include_once 'db/connect.php';

# method 1
// $name = '%e%';

# method 2
$name = 'e';

$stmt = $conn->prepare('SELECT * FROM customers WHERE name LIKE :name');
$stmt->setFetchMode(PDO::FETCH_ASSOC); 

# method 1
// $stmt->bindParam(':name', $name, PDO::PARAM_STR); 
// $stmt->execute();

# method 2
$stmt->execute(array(
    'name' => '%'. $name .'%'
));


// fetching data 
# method 1
// while ($row = $stmt->fetch()) {
//     echo '<pre>',print_r($row,true),'</pre>'; 
// }

// or fetch data at once
# method 2
$result = $stmt->fetchAll();
echo '<pre>',print_r($result,true),'</pre>';


// Row count
echo '<br/> Rows Counted : ' . $stmt->rowCount();