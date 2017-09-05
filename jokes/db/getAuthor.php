<?php
include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/alexanderp97/jokes/db/dbConnect.php';
try{
    $result = $pdo->query('SELECT id, name FROM author');
}
catch (PDOException $e){
    $error = 'Error fetching author details.';
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/alexanderp97/jokes/error/error.php';
    exit();
}
?>