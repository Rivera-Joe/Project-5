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
//dogs
$bullet = addEntry('Bullet', 'Dog', 'Grey Hound','M', 'White', '1 Year', 'M');
$tate = addEntry('Tate', 'Dog', 'Labradory', 'F', 'Brown', '4 Years', 'L');
$boomer = addEntry('Boomer', 'Dog', 'Corgi', 'M', 'Brown', '6 Months', 'S');
$hazel = addEntry('Hazel', 'Dog', 'Terrier', 'F', 'White', '1 Year', 'M');
$penny = addEntry('Penny', 'Dog', 'Yorkie', 'F', 'Gold', '3 Years', 'S');
$lola = addEntry('Lola', 'Dog', 'Shiba Inu', 'F', 'Brown', '1 Year', 'M');
$hercules = addEntry('Hercules', 'Dog', 'Bull Dog', 'M', 'Grey', '2 Years', 'M');
$coco = addEntry('Coco', 'Dog', 'Labrador', 'F', 'Brown', '6 Years', 'L');
$archie = addEntry('Archie', 'Dog', 'Shih tzu', 'M', 'Brown', '3 Years', 'S');
$bean = addEntry('Bean', 'Dog', 'Chihuahua', 'M', 'Brown', '1 Year', 'S');

//cats
$bobo = addEntry('Bobo', 'Cat', 'Short Hair', 'F', 'Black', '6 Months', 'S');
$calypso = addEntry('Calypso', 'Cat', 'Long Hair', 'F', 'Turtle Shell', '1 Year', 'M');
$lily = addEntry('Lily', 'Cat', 'Short Hair', 'F', 'White', '9 Years', 'M');
$meowMing = addEntry('Meow Ming', 'Cat', 'Short Hair', 'M', 'Brown', '3 Years', 'M');
$sandy = addEntry('Sandy', 'Cat', 'Short Hair', 'F', 'Brown', '2 Years', 'M');
$daisy = addEntry('Daisy', 'Cat', 'Short Hair', 'F', 'White', '1 Year', 'M');
$casey = addEntry('Casey', 'Cat', 'Short Hair', 'F', 'Black', '8 Months', 'S');
$jenny = addEntry('Jenny', 'Cat', 'Short Hair', 'F', 'White', '6 Months', 'S');
$mack = addEntry('Mack', 'Cat', 'Short Hair', 'M', 'Brown', '5 Years', 'L');
$tiger = addEntry('Tiger', 'Cat', 'Short Hair', 'M', 'Grey', '3 Years', 'L');

$animalArray = array($bullet, $tate, $boomer, $hazel, $penny, $lola, $hercules, $coco, $archie, $bean, $bobo, $calypso, $lily, $meowMing, $sandy, $daisy, $casey, $jenny, $mack, $tiger);
$arrLength = sizeof($animalArray);
for($x = 0; $x < $arrLength; $x++){
if(mysqli_query($connect, $animalArray[$x])){
  echo "<br />Record added successfully";
}else{
  echo "<br />Error: " . mysqli_error($connect);
}
}

//function to remove entrys
//--------------------

//  function removeEntry($name){
//    $sql_remove = "DELETE FROM Animal_Table WHERE Name='$name'";
//    return $sql_remove;
//  }
//
// $deleteString = removeEntry('Bullet');
//
// if(mysqli_query($connect, $deleteString)){
//   echo "<br />Record removed successfully";
// }else{
//   echo "<br />Error: " . mysqli_error($connect);
// }

mysqli_close($connect);













 ?>
