<?php

//set initial values
$server = 'localhost';
$user = 'root';


//attempt to connecdt to DB
$connect = mysqli_connect($server, $user);

//check for connection
if(!$connect){
  die('Connection failed: ' . mysqli_connect_error());
}

//if successful
echo 'Connected Successfully';

//create database
$sql_createDB = 'CREATE DATABASE adoptionCenter';

mysqli_query($connect, $sql_createDB);
//check for database creation
//mysqli_query($connect, $sql_createDB) ? echo 'Database created successfully' : echo 'Error creating database: ' . mysqli_error($connect);
if(mysqli_query($connect, $sql_createDB)){
  echo 'Created database successfully';
}
else{
  echo 'Error creating database: ' . mysqli_error($connect);
}
//create table
$sql_createTable = "CREATE TABLE Animal_Table(ID INT AUTO_INCREMENT PRIMARY KEY, Name VARCHAR(20) NOT NULL, Species VARCHAR(10) NOT NULL, Breed VARCHAR(20) NOT NULL, Gender VARCHAR(1) NOT NULL, Color VARCHAR(15), Age VARCHAR(10), Size VARCHAR(1))";

mysqli_select_db($connect, 'adoptionCenter') or die('Could not connect to database');

//check for table creation
//mysqli_query($connect, $sql_createTable) ? echo 'Table created successfully' : echo 'Error creating table: ' . mysqli_error($connect);
if(mysqli_query($connect, $sql_createTable)){
  echo 'Created table successfully';
}
else{
  echo 'Error creating table: ' . mysqli_error($connect);
}


function addEntry($name, $species, $breed, $gender, $color, $age, $size){

  $sql_add = `INSERT INTO Animal_Table(Name, Species, Breed, Gender, Color, Age, Size) VALUES ({$name}, {$species}, {$breed}, {$gender}, {$color}, {$age}, {$size}`;
  
}

















mysqli_close($connect); ?>
