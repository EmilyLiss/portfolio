<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="myforum"; // Database name
$tbl_name="fquestions"; // Table name

// Connect to server and select databse.
$db = mysqli_connect("$host", "$username", "$password");
mysqli_select_db($db, $db_name);

$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
// OREDER BY id DESC is order result by descending

$result=mysqli_query($db, $sql);
?>
<link rel = "stylesheet" type = "text/css" href = '../css/style.css'>
<style>
a {
  color: black;
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
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
<td width="15%" align="center" bgcolor="#E6E6E6"><strong>Views</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Replies</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
</tr>

<?php

// Start looping table row
while($rows = mysqli_fetch_array($result)){
?>
<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><br></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['view']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['reply']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
</tr>

<?php
// Exit looping and close connection
}
mysqli_close($db);
?>

<tr>
<td colspan="5" align="right" bgcolor="#E6E6E6"><a href="new_topic.php"><strong>Create New Topic</strong> </a></td>
</tr>
</table>
