<?php

include_once 'db/connect.php';

try {

    $conn->beginTransaction();
    
    $conn->query("INSERT INTO `articles` (`articles`.`article_title`, `articles`.`article_content`) VALUES('transaction','with rolling back');");
    $conn->query("DELETE FROM `articles` WHERE `articles`.`article_id` = ".$conn->lastInsertId());
    
    $conn->commit();  

} catch (Exception $e) {
    
    $conn->rollBack();
    die($e->getMessage());
}
?>