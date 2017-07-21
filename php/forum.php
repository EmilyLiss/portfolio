<!DOCTYPE html>
<html>
<head>
  <title>Forum</title>
    <link rel = "stylesheet" type = "text/css" href = '../css/style.css'>
    <style>
    h2 {
      margin-right: 1200px;
    }
    .stuff {
      margin-left: 400px;
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
<a href = "http://localhost/GWCend/php/new_topic.php"><div class = "pic" id = "forum">
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
  <h2>Forum:</h2>
  <?php inclue "new_topic.php" ?>
  </body>
</html>
