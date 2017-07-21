<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="myforum"; // Database name
$tbl_name="fquestions"; // Table name

// Connect to server and select databse.
$db = mysqli_connect("$host", "$username", "$password");
mysqli_select_db($db, $db_name);
// get value of id that sent from address bar
$id=$_GET['id'];
$sql="SELECT * FROM $tbl_name WHERE id='$id'";
$result=mysqli_query($db, $sql);
$rows=mysqli_fetch_array($result);
?>
<link rel = "stylesheet" type = "text/css" href = '../css/style.css'>
<style>
a {
  font-size: 30px;
  color: white;
}
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
<br/><br/><br/><br/><br/><br/>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#F8F7F1"><strong><?php echo $rows['topic']; ?></strong></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><?php echo $rows['detail']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>By :</strong> <?php echo $rows['name']; ?> <strong>Email : </strong><?php echo $rows['email'];?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Date/time : </strong><?php echo $rows['datetime']; ?></td>
</tr>
</table></td>
</tr>
</table>
<BR>

<?php

$tbl_name2="fanswer"; // Switch to table "forum_answer"
$sql2="SELECT * FROM $tbl_name2 WHERE question_id='$id'";
$result2=mysqli_query($db, $sql2);
while($rows=mysqli_fetch_array($result2)){
?>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#F8F7F1"><strong>ID</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><?php echo $rows['a_id']; ?></td>
</tr>
<tr>
<td width="18%" bgcolor="#F8F7F1"><strong>Name</strong></td>
<td width="5%" bgcolor="#F8F7F1">:</td>
<td width="77%" bgcolor="#F8F7F1"><?php echo $rows['a_name']; ?></td>
</tr>
<tr>
<td bgcolor="#F8F7F1"><strong>Email</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><?php echo $rows['a_email']; ?></td>
</tr>
<tr>
<td bgcolor="#F8F7F1"><strong>Answer</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><?php echo $rows['a_answer']; ?></td>
</tr>
<tr>
<td bgcolor="#F8F7F1"><strong>Date/Time</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><?php echo $rows['a_datetime']; ?></td>
</tr>
</table></td>
</tr>
</table><br>

<?php
}

$sql3="SELECT view FROM $tbl_name WHERE id='$id'";
$result3=mysqli_query($db, $sql3);
$rows=mysqli_fetch_array($result3);
$view=$rows['view'];

// if have no counter value set counter = 1
if(empty($view)){
$view=1;
$sql4="INSERT INTO $tbl_name(view) VALUES('$view') WHERE id='$id'";
$result4=mysqli_query($db, $sql4);
}

// count more value
$addview=$view+1;
$sql5="update $tbl_name set view='$addview' WHERE id='$id'";
$result5=mysqli_query($db, $sql5);
mysqli_close($db);
?>
<link rel = "stylesheet" type = "text/css" href = 'forum.css'>
<BR>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="add_answer.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td width="18%"><strong>Name</strong></td>
<td width="3%">:</td>
<td width="79%"><input name="a_name" type="text" id="a_name" size="45"></td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td>:</td>
<td><input name="a_email" type="text" id="a_email" size="45"></td>
</tr>
<tr>
<td valign="top"><strong>Answer</strong></td>
<td valign="top">:</td>
<td><textarea name="a_answer" cols="45" rows="3" id="a_answer"></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
<td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<center><a href = "main_forum.php"><h5 id = "link">See all topics</h5></a></center>
