<?php

/** 
 * using mysqli_connect for database connection 
 */

$databaseHost = 'localhost';
$databaseName = 'jwd_b_db_crud.sql';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect(
    $databaseHost,
    $databaseUsername,
    $databasePassword,
    $databaseName
);
