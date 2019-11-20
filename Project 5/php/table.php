<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    @import "../CSS/main.css";
    table{
      border-collapse: collapse;
      width: 50%;
      margin-left: auto;
      margin-right: auto;
      text-align: center;
      margin-top:200px;
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
    .poster img{
      width: 100%;
      height: 400px;
    }
    .info .img-pet1{
  background-image: url(../images/wGHound.jpg);
}

.info .img-pet2{
  background-image: url(../images/bLab.jpg);
}
.info .img-pet3{
  background-image: url(../images/boomer.jpg);
}
.info .img-pet4{
  background-image: url(../images/hazel.jpg);
}
.info .img-pet5{
  background-image: url(../images/penny.jpg);
}
.info .img-pet6{
  background-image: url(../images/lola.jpg);
}
.info .img-pet7{
  background-image: url(../images/hercules.jpg);
}
.info .img-pet8{
  background-image: url(../images/coco.jpg);
}
.info .img-pet9{
  background-image: url(../images/archie.jpg);
}
.info .img-pet10{
  background-image: url(../images/bean.jpg);
}
.info .img-pet11{
  background-image: url(../images/bobo.jpg);
}
.info .img-pet12{
  background-image: url(../images/calypso.jpg);
}
.info .img-pet13{
  background-image: url(../images/lily.jpg);
}
.info .img-pet14{
  background-image: url(../images/meowming.jpg);
}
.info .img-pet15{
  background-image: url(../images/sandy.jpg);
}
.info .img-pet16{
  background-image: url(../images/daisy.jpg);
}
.info .img-pet17{
  background-image: url(../images/casey.jpg);
}
.info .img-pet18{
  background-image: url(../images/jenny.jpg);
}
.info .img-pet19{
  background-image: url(../images/mack.jpg);
}
.info .img-pet20{
  background-image: url(../images/tiger.jpg);
}

/* $bPic ='../images/wGHound.jpg';
$tPic = '../images/bLab.jpg';
$boomPic = '../images/boomer.jpg';
$hazelPic = '../images/hazel.jpg';
$pennyPic = '../images/penny-xs.jpg';
$lolaPic = '../images/lola.jpg';
$hercPic = '../images/hercules.webp';
$cocoPic = '../images/coco.jpg';
$archPic = '../images/archie.jpg';
$beanPic = '../images/bean.webp';
$boboPic = '../images/bobo.jpg';
$calPic = '../images/calypso.jpg';
$lilyPic = '../images/lily.jpg';
$meowPic = '../images/meowming.jpg';
$sandyPic = '../images/sandy.jpg';
$daisyPic = '../images/daisy.jpg';
$caseyPic = '../images/casey.jpg';
$jennyPic = '../images/jenny.jpg';
$mackPic = '../images/mack.jpg';
$tigerPic = '../images/tiger.jpg'; */

    @media (max-width:768px) {
      .poster img{
        height: 800px;
      }
    }
    
  </style>
</head>
<body>

<div class="asidecontainer">
    <aside class="aside-desktop">
      <ul>
        <li><div><i class="fa fa-facebook-square" style="color:#3b5998;" ></i></div></li>
        <li><div><i class="fa fa-instagram" style="color:#bc2a8d;" ></i></div></li>
        <li><div><i class="fa fa-youtube-square" style="color:#c4302b" ></i></div></li>
        <li><div><i class="fa fa-twitter-square" style="color:#00aced;"></i></div></li>
      </ul>
    </aside>
    </div>
    <div class="maincontainer">
    <header class="header-nav">
       <div class="logopic">
         <img src="../images/logo.png" alt="logo">
       </div>
       <div class="logo">HAPPY TAILS</div>
       <nav class="active">
         <ul>
           <li><a href="#" >Home</a></li>
           <li><a href="../php/table.php">Adopt</a></li>
           <li><a href="#">Events</a></li>
           <li><a href="#">Resources</a></li>
           <li><a href="#">Animal Control</a></li>
           <div class="logopic-nav">
             <img src="../images/logo.png" alt="logo">
           </div>
         </ul>
       </nav>
       <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
    </header>


<?php

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
$bPic ='../images/wGHound-xs.jpg';
$tPic = '../images/bLab-xs.jpg';
$boomPic = '../images/boomer-xs.jpg';
$hazelPic = '../images/hazel-xs.jpg';
$pennyPic = '../images/penny-xs.jpg';
$lolaPic = '../images/lola-xs.jpg';
$hercPic = '../images/hercules-xs.jpg';
$cocoPic = '../images/coco-xs.jpg';
$archPic = '../images/archie-xs.jpg';
$beanPic = '../images/bean-xs.jpg';
$boboPic = '../images/bobo-xs.jpg';
$calPic = '../images/calypso-xs.jpg';
$lilyPic = '../images/lily-xs.jpg';
$meowPic = '../images/meowming-xs.jpg';
$sandyPic = '../images/sandy-xs.jpg';
$daisyPic = '../images/daisy-xs.jpg';
$caseyPic = '../images/casey-xs.jpg';
$jennyPic = '../images/jenny-xs.jpg';
$mackPic = '../images/mack-xs.jpg';
$tigerPic = '../images/tiger-xs.jpg';
 

//dogs
$bullet = addEntry('Bullet', 'Dog', 'Grey Hound','M', 'White', '1 Year', 'M', $bPic);
$tate = addEntry('Tate', 'Dog', 'Labradory', 'F', 'Brown', '4 Years', 'L', $tPic);
$boomer = addEntry('Boomer', 'Dog', 'Corgi', 'M', 'Brown', '6 Months', 'S', $boomPic);
$hazel = addEntry('Hazel', 'Dog', 'Terrier', 'F', 'White', '1 Year', 'M', $hazelPic);
$penny = addEntry('Penny', 'Dog', 'Yorkie', 'F', 'Gold', '3 Years', 'S', $pennyPic);
$lola = addEntry('Lola', 'Dog', 'Shiba Inu', 'F', 'Brown', '1 Year', 'M', $lolaPic);
$hercules = addEntry('Hercules', 'Dog', 'Bull Dog', 'M', 'Grey', '2 Years', 'M', $hercPic);
$coco = addEntry('Coco', 'Dog', 'Labrador', 'F', 'Brown', '6 Years', 'L', $cocoPic);
$archie = addEntry('Archie', 'Dog', 'Shih tzu', 'M', 'Brown', '3 Years', 'S', $archPic);
$bean = addEntry('Bean', 'Dog', 'Chihuahua', 'M', 'Brown', '1 Year', 'S', $beanPic);
//cats
$bobo = addEntry('Bobo', 'Cat', 'Short Hair', 'F', 'Black', '6 Months', 'S', $boboPic);
$calypso = addEntry('Calypso', 'Cat', 'Long Hair', 'F', 'Turtle Shell', '1 Year', 'M', $calPic);
$lily = addEntry('Lily', 'Cat', 'Short Hair', 'F', 'White', '9 Years', 'M', $lilyPic);
$meowMing = addEntry('Meow Ming', 'Cat', 'Short Hair', 'M', 'Brown', '3 Years', 'M', $meowPic);
$sandy = addEntry('Sandy', 'Cat', 'Short Hair', 'F', 'Brown', '2 Years', 'M', $sandyPic);
$daisy = addEntry('Daisy', 'Cat', 'Short Hair', 'F', 'White', '1 Year', 'M', $daisyPic);
$casey = addEntry('Casey', 'Cat', 'Short Hair', 'F', 'Black', '8 Months', 'S', $caseyPic);
$jenny = addEntry('Jenny', 'Cat', 'Short Hair', 'F', 'White', '6 Months', 'S', $jennyPic);
$mack = addEntry('Mack', 'Cat', 'Short Hair', 'M', 'Brown', '5 Years', 'L', $mackPic);
$tiger = addEntry('Tiger', 'Cat', 'Short Hair', 'M', 'Grey', '3 Years', 'L', $tigerPic);
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
  // echo '<table style="border-collapse: collapse;">';
  //create header row
  // echo '<tr>';
  // echo '<th>ID</th><th>Name</th><th>Species</th><th>Breed</th><th>Gender</th><th>Color</th><th>Age</th><th>Size</th><th>Image</th>';
  // echo '</tr>';
  echo '<div class="wrapper" style="margin-top:250px;">';
  echo '<ul class="stage clearfix" >';
  //name species breed gender color age size
  if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
      // echo '<tr><td>' . $row["ID"] . '</td><td>' . $row["Name"] . '</td><td>' . $row["Species"] . '</td><td>' . $row["Breed"] . '</td><td>' . $row["Gender"] . '</td><td>' . $row["Color"] . '</td><td>' . $row["Age"] . '</td><td>' . $row["Size"] . '</td><td>' . $row["Image"] . '</td></tr>';
      echo '<li class="scene">';
      echo '<div class="movie" onclick="return true">';
      echo '<div class="poster">';
      echo '<img src=" '. $row["Image"] .' " >';
      echo '</div>';
      //  echo '<div class="poster" style="background-image: url( " ' . $row["Image"] . ' " )";></div>';
       echo '<div class="info">';
       echo '<header class="img-pet'. $row["ID"] .'">';
       echo '<h1>' . $row["Name"] .'</h1>';
       echo '<span class="age">'. $row["Age"] .'</span>';
       echo '</header>';
       echo '<p>';
       echo '<span class="age"> Species: '. $row["Species"] .'</span><br />';
       echo '<span class="age"> Breed: '. $row["Breed"] .'</span><br />';
       echo '<span class="age"> Color: '. $row["Color"] .'</span><br />';
       echo '<span class="age"> Size: '. $row["Size"] .'</span><br />';
       echo '<span class="age"> Gender: '. $row["Gender"] .'</span><br />';
       echo '</p>';
       echo '</div>';
       echo '</div>';
       echo '</li>';
      //  echo $row["Image"];
      // echo '<img src=" '. $row["Image"] .' " >';
    }
    // echo '</table>';
    echo '</ul>';
    echo '</div>';
  }
}
mysqli_close($connect);
 ?>

<footer style="background-color:inherit;">
      <div class="footer-container">
      <div class="content-contact">
        <h1>Contact Us</h1>
        <p>somestreet 3432 main city ,TX</p>
        <p>Phone:281-999-9999</p>
        <p>Email:emailanimal@gmail.com</p>
      </div>
      <div class="footer-logo">
          <img src="../images/logo.png" alt="logo">
        </div>
      <div class="fastlinks">
        <div class="row1">
        <h1>Helpful Links</h1>
        <p>Home</p>
        <p>Online Services</p>
        <p>City Council</p>
        <p>Copyright Notices</p>
      </div>
      <div class="row2">
        <p>Boards & Commissions</p>
        <p>Geographic Information Systems(GIS)</p>
        <p>Laserfiche</p>
        <p>eNewsletters</p>
      </div>
      </div>
    </div>
    </footer>
  <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../JS/main.js"></script>
</body>
</html>