<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    /* ----------------------Global------------------ */
/* ----------------------Global------------------ */
/* ----------------------Global------------------ */
*{
  padding:0;
  margin:0;
}
body{
  padding:0;
  margin:0;
  font-family: sans-serif;
}


/* ---------X------------Global---------X-------- */
/* ---------X------------Global---------X-------- */
/* ---------X------------Global---------X-------- */
/* ---------X------------Global---------X-------- */




/* ----------------Desktop--------------- */
/* ----------------Desktop--------------- */
/* ----------------Desktop--------------- */
/* ----------------Desktop--------------- */


/* ----------------Header---------------- */
header{
  position: absolute;
  top:0;
  left:0;
  background-color: #262626;
  width:100%;
  margin:0 !important;
  padding:0 !important;
}
header .logopic {
  border:1px solid #fff;
  width:100px;
  float:left;
}
header .logopic img {
  width:100px;
  height: 100px;
}
header .logo{
  color:#fff;
  height: 50px;
  line-height: 100px;
  font-size: 24px;
  float: left;
  font-weight: bold;
  /* padding-left:120px; */
}
header nav{
  float:right;
}
header nav ul{
  margin:0;
  padding:0;
  display: flex;
}
header nav ul li{
  list-style: none;
}
header nav ul li a{
  height: 50px;
  line-height: 70px;
  padding: 15px 35px;
  color:#fff;
  text-decoration: none;
  display:block;
}
header nav ul li a:hover{
  color:#fff;
  background-color: #219963;
}
header .logopic-nav {
  display:none;
}
.menu-toggle{
  color: #fff;
  float:right;
  line-height: 50px;
  font-size: 24px;
  cursor: pointer;
  display:none;
}
/* --------X-------Header--------X------- */

/* ----------------Aside----------------- */

aside{
  height: 100%;
  width:100px;
  position: fixed;
  top:0;
  left:0;
  background-color: #ccc;
}
aside ul{
  position:relative;
  top:45%;
  list-style: none;
  display:flex;
  flex-direction: column;
  text-align: center;

}
aside ul li{
  padding:25px 0;
}

/* --------X-------Aside---------X------- */




/* --------------Main--------------------- */

.mySlides{
  width:100%;
  height: 800px;
}
.title{
  display:block;
  background-color: #ccc;
  width:100%;
  line-height: 6em;
  margin-top:-25px;
}
.title h1{
  text-align: center;
  font-weight: bold;
}
.arrow-down {
  margin:auto;
  width: 0;
  height: 0;
  border-left: 20px solid transparent;
  border-right: 20px solid transparent;
  border-top: 20px solid #ccc;
}
.content-lives-change{
  width:100%;
  height:500px;
  border:1px solid #000;
  margin-bottom:50px;
}
.content-events{
  width:100%;
  height:500px;
  border:1px solid #000;
  margin-bottom:50px;
}
/* -------X-------Main-----------X---------- */



/* --------X--------Desktop--------X------- */
/* --------X--------Desktop--------X------- */
/* --------X--------Desktop--------X------- */
/* --------X--------Desktop--------X------- */





/* ---------------------Mobile----------------------- */
/* ---------------------Mobile----------------------- */
/* ---------------------Mobile----------------------- */
/* ---------------------Mobile----------------------- */
@media (max-width:768px) {
  body{
    width:100%;
  }
  /* -----------------MobileHeader------------------- */
  header{
    position: fixed;
    padding:0 20px;
  }
  header .logo{
    line-height: 50px;
    padding-left:20px;
  }
  header .logopic{
    display:none;
  }
  .menu-toggle{
    display:block;
    margin-right: 20px;
  }
  header nav{
    /* display:none; */
    position: fixed;
    width:100%;
    height: calc(120vh - 50px);
    background-color: #333;
    top:50px;
    left:-100%;
    transition:0.5s ;
  }
  header nav.active{
    left:0;
  }
   header nav ul{
     display:block;
     text-align: center;
   }
   header nav ul li{
     border-bottom: 1px solid rgba(0,0,0,.2);
   }
   header .logopic-nav {
     display:block;
     margin:auto;
   }
 /* ----------X------MobileHeader---------X---------- */

/* -----------------MobileAside------------------- */
  aside{
    position: absolute;
    top: 5000px; 
    width:100%;
    height: 150px;
  }
  aside ul{
    top:0;
    border:1px solid #000;
    flex-direction: row;
    width:90%;
    margin:auto;
  }
  aside ul li{
    padding:0 7%;
  }

 /* ---------X-------MobileAside---------X--------- */

/* --------------MobileMain--------------------- */
.mySlides{
  height: 400px;
}

/* -------X-------MobileMain-----------X---------- */





}
/* -----------X----------Mobile----------X------------- */
/* -----------X----------Mobile----------X------------- */
/* -----------X----------Mobile----------X------------- */
/* -----------X----------Mobile----------X------------- */
/* -----------X----------Mobile----------X------------- */
/* -----------X----------Mobile----------X------------- */

    table{
      border-collapse: collapse;
     
      max-width: 50%;
      min-width: 30%;
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
$_SESSION['count'] = '0';
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
$bPic ='<img src="../images/wGHound.jpg"/>';
$tPic = '<img src="../images/bLab.jpg"/>';
$boomPic = '<img src="../images/boomer.jpg"/>';
$hazelPic = '<img src="../images/hazel.jpg"/>';
$pennyPic = '<img src="../images/penny.jpg"/>';
$lolaPic = '<img src="../images/lola.jpg"/>';
$hercPic = '<img src="../images/hercules.webp"/>';
$cocoPic = '<img src="../images/coco.jpg"/>';
$archPic = '<img src="../images/archie.jpg"/>';
$beanPic = '<img src="../images/bean.webp"/>';
$boboPic = '<img src="../images/bobo.jpg"/>';
$calPic = '<img src="../images/calypso.jpg"/>';
$lilyPic = '<img src="../images/lily.jpg"/>';
$meowPic = '<img src="../images/meowming.jpg"/>';
$sandyPic = '<img src="../images/sandy.jpg"/>';
$daisyPic = '<img src="../images/daisy.jpg"/>';
$caseyPic = '<img src="../images/casey.jpg"/>';
$jennyPic = '<img src="../images/jenny.jpg"/>';
$mackPic = '<img src="../images/mack.jpg"/>';
$tigerPic = '<img src="../images/tiger.jpg"/>';
//dogs

if($_SESSION['count'] == '0'){

  $_SESSION['count'] = '1';
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
<footer style="margin-left: 25%;width: 50%;">
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