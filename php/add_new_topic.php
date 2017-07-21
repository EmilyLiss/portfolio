<link rel = "stylesheet" type = "text/css" href = '../css/style.css'>
<style>
#home {
  background: url("../pics/home.png")no-repeat center;
  color: black;
  text-shadow: none;
}
#forum {
  background: url("../pics/forum.png")no-repeat;
  background-position: center;
  color: black;
}
#Gallery {
  background: url("../pics/gallery.png")no-repeat;
  background-position: center;
  color: black;
  text-shadow: none;
}
#pic1 {
  background-image: url("../pics/sike2.JPG");
}
</style>
<div id = "pic1">
<img id = "logo" src = "../pics/logo.png"/>
</div>
<hr class = "hr"/>
<div id = "pic">
<a href = "../html/Imani.html"><div class = "pic" id = "Imani">
<br/><div class = "mani">
<span>Imani</span></div>
</div></a></div><div id = "pic">
<a href = "new_topic.php"><div class = "pic" id = "forum">
<br/>
<span>Forum</span>
</div></a></div><div id = "pic">
<a href = "../html/Shamya.html"><div class = "pic" id = "Mya">
<br/>
<span>Mya</span>
</div></a></div><div id = "pic">
<a href = "../html/home.html"><div class = "pic" id = "home">
<br/>
<span>Home</span>
</div></a></div><div id = "pic">
<a href = "../html/Kenadie.html"><div class = "pic" id = "Kenadie">
<br/>
<span>Kenadie</span>
</div></a></div><div id = "pic">
<a href = "../html/gallery.html"><div class = "pic" id = "Gallery">
<br/>
<span>Gallery</span>
</div></a></div><div id = "pic">
<a href = "../html/Emily.html"><div class = "pic" id = "Emily">
<br/>
<span>Emily</span>
</div></a></div>
<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="myforum"; // Database name
$tbl_name="fquestions"; // Table name

// Connect to server and select database.
$db = mysqli_connect("$host", "$username", "$password");
mysqli_select_db($db, $db_name);

// get data that sent from form
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];

$datetime=date("d/m/y h:i:s"); //create date time

$sql="INSERT INTO $tbl_name(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
$result=mysqli_query($db, $sql);

if($result){
  ?>
  <style>
  .wrap {
    background-color: #ece816;
    border-radius: 15px;
    border: 2px solid white;
    width: 400px;
    font-size: 50px;
    color: white;
  }
  a {
    color: white;
  }
  </style>
  <br/><br/><br/><br/><br/><br/>
  <center><div class = "wrap">
    <h6>Successful<br/><a href="new_topic.php">Back to page</a></h6>
  </div></center>
  <?php
}
else {
echo "ERROR";
}
mysqli_close($db);
?>
