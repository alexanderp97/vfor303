<?php
include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/alexanderp97/jokes/db/dbConnect.php';
try{
    $sql = 'INSERT INTO author SET name = :name';
    $s = $pdo->prepare($sql);
    $s->bindValue(':name', $_POST['name']);
    $s->execute();
}
catch (PDOException $e){
    $error = 'Error adding submitted authors.';
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/alexanderp97/jokes/error/error.php';
    exit();
}
?>