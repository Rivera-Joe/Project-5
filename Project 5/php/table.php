<?php

//set initial values
$server = 'localhost';
$user = 'root';


//attempt to connecdt to DB
$connect = mysqli_connect($server, $user);

//check for connection
if(!$connect){
  die('Connection failed: ' . mysqli_connect_error($connect));
}

//if successful
echo 'Connected Successfully<br />';

//create database
$sql_createDB = 'CREATE DATABASE adoptionCenter';

mysqli_query($connect, $sql_createDB);
//check for database creation
//mysqli_query($connect, $sql_createDB) ? echo 'Database created successfully' : echo 'Error creating database: ' . mysqli_error($connect);
if(mysqli_query($connect, $sql_createDB)){
  echo 'Created database successfully<br />';
}
else{
  echo 'Error creating database: ' . mysqli_error($connect);
}
//create table
$sql_createTable = "CREATE TABLE Animal_Table(ID INT AUTO_INCREMENT PRIMARY KEY, Name VARCHAR(20) NOT NULL, Species VARCHAR(10) NOT NULL, Breed VARCHAR(30) NOT NULL, Gender VARCHAR(1) NOT NULL, Color VARCHAR(15), Age VARCHAR(10), Size VARCHAR(1))";
$sql_dbName = 'adoptioncenter';

mysqli_select_db($connect, $sql_dbName) or die('Could not connect to database<br />');

if(mysqli_query($connect, $sql_createTable)){
  echo 'Table created successfully<br />';
}
else{
  echo('Could not create table: ' . mysqli_error($connect));
}

function addEntry($name, $spec, $breed, $gender, $color, $age, $size){





      $sql_add = "INSERT INTO Animal_Table(Name, Species, Breed, Gender, Color, Age, Size) VALUES('$name', '$spec', '$breed', '$gender', '$color', '$age', '$size')";

      return $sql_add;



};

$entryString = addEntry('Bullet', 'Dog', 'Grey_Hound','M', 'White', '1_Year', 'M');


if(mysqli_query($connect, $entryString)){
  echo "<br />Record added successfully";
}else{
  echo "<br />Error: " . mysqli_error($connect);
}
mysqli_close($connect);













 ?>
