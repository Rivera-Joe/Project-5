<?php

//set initial values
$server = 'localhost';
$user = 'username';
$password = '';

//attempt to connecdt to DB
$connect = mysqli_connect($server, $user, $password);

//check for connection
if(!$connect){
  die('Connection failed: ' . mysqli_connect_error());
}

//if successful
echo 'Connected Successfully';

//create database
$sql_createDB = 'CREATE DATABASE Adoption_Center';

//check for database creation
(mysqli_query($connect, $sql_createDB))? echo 'Database created successfully'; : echo 'Error creating database: ' . $connection->error;

//create table
$sql_createTable = "CREATE TABLE Animal_Table(id)"


















$mysqli_close($connect); ?>
