<!DOCTYPE html>
<html>
<head>
  <title>Forum</title>
    <link rel = "stylesheet" type = "text/css" href = '../css/style.css'>
    <style>
    h2 {
      margin-left: 300px;
    }
    .stuff {
      margin-left: 400px;
    }
    #pic1 {
      background-image: url("../pics/child.jpg");
    }
    #link {
      text-decoration: underline;
      font-size: 30px;
    }
    h6 {
      font-size: 30px;
      color: white;
    }
    h6, h5 {
      line-height: 0px;
    }
    a {
      color: white;
    }
    .wrap {
      background-color: #ece816;
      border-radius: 15px;
      border: 2px solid white;
      width: 600px;
    }
    .wrap div {
      margin-top: 50px;
    }
    #pic1 {
      background-image: url("../pics/sike2.JPG");
    }
    </style>
</head>
<body>
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
</div></a></div><br/><br/><br/>
<h2>Forum:</h2>
<center><div class= "wrap"><div>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form id="form1" name="form1" method="post" action="add_new_topic.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3" bgcolor="#E6E6E6"><strong>Create New Topic</strong> </td>
</tr>
<tr>
<td width="14%"><strong>Topic</strong></td>
<td width="2%">:</td>
<td width="84%"><input name="topic" type="text" id="topic" size="50" /></td>
</tr>
<tr>
<td valign="top"><strong>Detail</strong></td>
<td valign="top">:</td>
<td><textarea name="detail" cols="50" rows="3" id="detail"></textarea></td>
</tr>
<tr>
<td><strong>Name</strong></td>
<td>:</td>
<td><input name="name" type="text" id="name" size="50" /></td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td>:</td>
<td><input name="email" type="text" id="email" size="50" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit" />
<input type="reset" name="Submit2" value="Reset" /></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<center><h6>Or</h6><a href = "main_forum.php"><h5 id = "link">See all topics</h5></a></center>
</div></div></center>
</body>
</html>
