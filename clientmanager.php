<html>
  <head> 
      <meta charset="utf-8"/>
      <title> My account </title>
      <link rel="stylesheet" type="text/css" href="acceuil_css.css?version=1">
  </head>
  
  <body>
<style>
body
{width:100%;
margin:auto;
background-image:url("images/fond.png");
background-color: ;}
#back
{
margin-left:55px;
margin-top:10px;}

button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
	margin-left:55px;
    padding: 18px;
    width: 90%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
	font-family:tahoma;
	font-weight:bold;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}

div.panel {
    padding: 0px 18px;
	padding-left:65px;
	padding-right:55px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
.panel h4
{font-weight:bold;}
#contenaire
{
	background-color:white;
	margin:100px;
	padding-top:5px;
	padding-bottom:100px;
	box-shadow: 0px 0px 5px gray;
	border-radius: 15px 5px 15px 5px;
}
#titre2
{
margin-left:180px;
text-align:center;
font-family:BigNoodleTitling;
font-size: 50px;
}
button.accordion:after {
    content: '+'; /* Unicode character for "plus" sign (+) */
    font-size: 13px;
    color: #777;
    float: right;
    margin-left: 5px;
}

button.accordion.active:after {
    content: "-"; /* Unicode character for "minus" sign (-) */
}
input
{width:150px;}

#goback
{
margin-left:60px;
text-decoration:none;
font-size:18px;
font-family:BigNoodleTitling;}

a:hover
{
text-decoration:underline;
color:red;
font-size:18px;
font-family:BigNoodleTitling;}

#pseudo, #logout
{display:inline-block;
  font-size:20px;
  font-family:BigNoodleTitling;
  text-decoration:none;
}
  

    #logout:hover
  { 
  color:red;
  text-decoration:line-through;;
  }
  #ps
  { 
  position: relative;
  top:-50px;
  float:right;
  margin-right:100px;}
 
</style>
</head>
<body>

<div id="ps">
<div id="pseudo">
<?php
// Start the session
session_start();
?>

<?php 
{
$oem= $_SESSION["em"];
mysql_connect("localhost","root","");
mysql_select_db("traveladdict");
$reponse=mysql_query("SELECt * FROM`inscription` WHERE `email`='$oem'");
while ($donne=mysql_fetch_array($reponse))
{
?>

 <p>Hello <?php echo $donne['firstname'];?> <?php echo $donne['lastname'];?> |  </p>


<?php
}
}
?></div>
      <a href="logout.php" id="logout"> Log Out </a>
	  </div>
 <div id="contenaire">
       <p id="titre2"> Account Settings! </p>
<button class="accordion">Account details</button>
<div class="panel"><br>
<form method="post" action="account_settings.php">
New pseudo <br><input type="text" name="newpseudo"/> <button type="submit" name="changepseudo" value="cp"> Change </button><br>
New password <br><input type="text" name="newpass"/> <button type="submit" name="changepass" value="cps"> Change </button><br>
New email <br><input type="text" name="newemail"/> <button type="submit" name="changeemail" value="cem"> Change </button><br>
</form>  
  </div>

<button class="accordion">Member information</button>
<div class="panel"><br>
<form method="post" action="account_information.php">
First name <br> <input type="text" name="firstname"/><br>
Last name <br> <input type="text" name="lastname"/><br>
Address <br> <input type="text" name="adress"/><br>
Phone number <br> <input type="text" name="tel"/><br><br>

<button type="submit" name="save" value="save"> Save </button>
</form>
</div>
<button class="accordion">Payment card</button>
<div class="panel"><br>
<form method="post" action="clientmanager.php">


<?php 
{
$oem= $_SESSION["em"];
mysql_connect("localhost","root","");
mysql_select_db("traveladdict");
$reponse=mysql_query("SELECt * FROM`inscription` WHERE `email`='$oem'");
while ($donne=mysql_fetch_array($reponse))
{
?>

 <p>Mr <?php echo $donne['firstname'];?> <?php echo $donne['lastname'];?> </p>
 <p>Your remaining credit is: <?php echo $donne['cardcredit'];?> DZD </p>

<?php
}
}
?>
</form>

</div>
<br>
<a id="goback" href="travelclient.php"> Go Back </a>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
</script>

</body>
</html> 