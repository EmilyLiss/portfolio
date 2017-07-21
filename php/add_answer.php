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
$tbl_name="fanswer"; // Table name

// Connect to server and select databse.
$db = mysqli_connect("$host", "$username", "$password");
mysqli_select_db($db, $db_name);

// Get value of id that sent from hidden field
$id=$_POST['id'];

// Find highest answer number.
$sql="SELECT MAX(a_id) AS Maxa_id FROM $tbl_name WHERE question_id='$id'";
$result=mysqli_query($db, $sql);
$rows=mysqli_fetch_array($result);

// add + 1 to highest answer number and keep it in variable name "$Max_id". if there no answer yet set it = 1
if ($rows) {
$Max_id = $rows['Maxa_id']+1;
}
else {
$Max_id = 1;
}

// get values that sent from form
$a_name = $_POST['a_name'];
$a_email = $_POST['a_email'];
$a_answer = $_POST['a_answer'];

$datetime=date("d/m/y H:i:s"); // create date and time

// Insert answer
$sql2="INSERT INTO $tbl_name(question_id, a_id, a_name, a_email, a_answer, a_datetime)VALUES('$id', '$Max_id', '$a_name', '$a_email', '$a_answer', '$datetime')";
$result2=mysqli_query($db, $sql2);

if($result2){
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
// If added new answer, add value +1 in reply column
$tbl_name2="fquestions";
$sql3="UPDATE $tbl_name2 SET reply='$Max_id' WHERE id='$id'";
$result3=mysqli_query($db, $sql3);
}
else {
echo "ERROR";
}

// Close connection
mysqli_close($db);
?>
