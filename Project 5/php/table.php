<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    table{
      border-collapse: collapse;
      width: 50%;
      margin-left: auto;
      margin-right: auto;
      text-align: center;
    }
    table th{
      background-color: #4CAF50;
    }

    table, td, th{
      border: 1px solid #000;
      padding: 8px;
    }

    table tr:nth-child(even){
      background-color: #f2f2f2;
    }

    img{
      width: 100px;
      height: auto;
      margin-left: auto;
      margin-right: auto;
    }


  </style>
</head>
<body>
<?php
echo'<link href="../css/table.css">';
//set initial values
$server = 'localhost';
$user = 'root';


//attempt to connecdt to DB
$connect = mysqli_connect($server, $user);

echo '<div style="display: none;">';

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
$sql_createTable = "CREATE TABLE Animal_Table(ID INT AUTO_INCREMENT PRIMARY KEY, Name VARCHAR(20) NOT NULL, Species VARCHAR(10) NOT NULL, Breed VARCHAR(30) NOT NULL, Gender VARCHAR(1) NOT NULL, Color VARCHAR(15), Age VARCHAR(10), Size VARCHAR(1), Image LONGBLOB NOT NULL)";
$sql_dbName = 'adoptioncenter';

mysqli_select_db($connect, $sql_dbName) or die('Could not connect to database<br />');

if(mysqli_query($connect, $sql_createTable)){
  echo 'Table created successfully<br />';
}
else{
  echo('Could not create table: ' . mysqli_error($connect));
}

function addEntry($name, $spec, $breed, $gender, $color, $age, $size, $img){





      $sql_add = "INSERT INTO Animal_Table(Name, Species, Breed, Gender, Color, Age, Size, Image) VALUES('$name', '$spec', '$breed', '$gender', '$color', '$age', '$size', '$img')";

      return $sql_add;



};

$image ='<img src="../images/weePup.jpg"/>';
//dogs
$bullet = addEntry('Bullet', 'Dog', 'Grey Hound','M', 'White', '1 Year', 'M', $image);
$tate = addEntry('Tate', 'Dog', 'Labradory', 'F', 'Brown', '4 Years', 'L', $image);
$boomer = addEntry('Boomer', 'Dog', 'Corgi', 'M', 'Brown', '6 Months', 'S', $image);
$hazel = addEntry('Hazel', 'Dog', 'Terrier', 'F', 'White', '1 Year', 'M', $image);
$penny = addEntry('Penny', 'Dog', 'Yorkie', 'F', 'Gold', '3 Years', 'S', $image);
$lola = addEntry('Lola', 'Dog', 'Shiba Inu', 'F', 'Brown', '1 Year', 'M', $image);
$hercules = addEntry('Hercules', 'Dog', 'Bull Dog', 'M', 'Grey', '2 Years', 'M', $image);
$coco = addEntry('Coco', 'Dog', 'Labrador', 'F', 'Brown', '6 Years', 'L', $image);
$archie = addEntry('Archie', 'Dog', 'Shih tzu', 'M', 'Brown', '3 Years', 'S', $image);
$bean = addEntry('Bean', 'Dog', 'Chihuahua', 'M', 'Brown', '1 Year', 'S', $image);

//cats
$bobo = addEntry('Bobo', 'Cat', 'Short Hair', 'F', 'Black', '6 Months', 'S', $image);
$calypso = addEntry('Calypso', 'Cat', 'Long Hair', 'F', 'Turtle Shell', '1 Year', 'M', $image);
$lily = addEntry('Lily', 'Cat', 'Short Hair', 'F', 'White', '9 Years', 'M', $image);
$meowMing = addEntry('Meow Ming', 'Cat', 'Short Hair', 'M', 'Brown', '3 Years', 'M', $image);
$sandy = addEntry('Sandy', 'Cat', 'Short Hair', 'F', 'Brown', '2 Years', 'M', $image);
$daisy = addEntry('Daisy', 'Cat', 'Short Hair', 'F', 'White', '1 Year', 'M', $image);
$casey = addEntry('Casey', 'Cat', 'Short Hair', 'F', 'Black', '8 Months', 'S', $image);
$jenny = addEntry('Jenny', 'Cat', 'Short Hair', 'F', 'White', '6 Months', 'S', $image);
$mack = addEntry('Mack', 'Cat', 'Short Hair', 'M', 'Brown', '5 Years', 'L', $image);
$tiger = addEntry('Tiger', 'Cat', 'Short Hair', 'M', 'Grey', '3 Years', 'L', $image);

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

echo '</div>';

$sql_select = "SELECT ID, Name, Species, Breed, Gender, Color, Age, Size, Image FROM Animal_Table";
$result = mysqli_query($connect, $sql_select);

if($result){
  
    //create table
  echo '<table style="border-collapse: collapse;">';

  //create header row
  echo '<tr>';
  echo '<th>ID</th><th>Name</th><th>Species</th><th>Breed</th><th>Gender</th><th>Color</th><th>Age</th><th>Size</th><th>Image</th>';
  echo '</tr>';

  //name species breed gender color age size
  if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
      echo '<tr><td>' . $row["ID"] . '</td><td>' . $row["Name"] . '</td><td>' . $row["Species"] . '</td><td>' . $row["Breed"] . '</td><td>' . $row["Gender"] . '</td><td>' . $row["Color"] . '</td><td>' . $row["Age"] . '</td><td>' . $row["Size"] . '</td><td>' . $row["Image"] . '</td></tr>';
    }
    echo '</table>';
  }

}




mysqli_close($connect);













 ?>
  
</body>
</html>
