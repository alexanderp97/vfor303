<?php
include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/alexanderp97/jokes/db/dbConnect.php';
try {
    $sql = 'DELETE FROM category WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
}
catch (PDOException $e){
    $error = 'Error delete category.';
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/alexanderp97/jokes/error/error.php';
    exit();
}
?>