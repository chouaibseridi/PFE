<html>
<head>

 <meta charset="utf-8"/>
 <title> Reservation </title>
</head>
<style>
body
{width:100%;
margin:auto;
background-image:url("images/fond.png");
background-color: #f4f5e2;}
h6
{
color:#556080;
margin-top:50px;
font-family:advent pro;
Font-size:40px;
text-align:center;

}
h4
{
color:#556080;
font-family:advent pro;
Font-size:30px;
text-align:center;
}
h5
{
color:#556080;
margin-top:100px;
font-family:advent pro;
Font-size:40px;
text-align:center;
padding-bottom:5px;
border-bottom: 2px solid gray;
border-top: 2px solid gray;
width:600px;
margin:auto;
margin-top:100px;
}
#img 
{margin-left:580px;
width:201px;
height:170px;}
#link 
{color:#556080;
font-family:advent pro;
Font-size:20px;
margin-left:520px;}
#link a 
{margin-right: 40px;
text-decoration :none;}
#link a:hover
{margin-right: 40px;
color:red;}
</style>
<body>

<?php
// Start the session
session_start();
?>
<?php
$id=$_GET["id"]; 
$oem= $_SESSION["em"];
$date = date("Y-m-d"); 
mysql_connect("localhost","root","");
mysql_select_db("traveladdict");
mysql_query("INSERT INTO `reservation_voyage` (`id_voy`, `email_client`, `date_res`) VALUES ('$id', '$oem', '$date')");


$reponse=mysql_query("SELECT prix FROM `voyage` WHERE id='$id'");
while ($donne=mysql_fetch_array($reponse))
{
 $prix=$donne['prix'];
 
}

$reponse=mysql_query("SELECT * FROM `inscription` WHERE email='$oem'");
while ($donne=mysql_fetch_array($reponse))
{
 $credit=$donne['cardcredit']; 
  $firstname=$donne['firstname']; 
 $lastname=$donne['lastname']; 
}
$remain=$credit-$prix;
mysql_query("UPDATE `inscription` SET `cardcredit`='$remain' WHERE `email`='$oem'");
?>
<h6><?php echo "Mr ";?> <?php echo $firstname;?><?php echo $lastname;?> <br> <?php echo "YOUR RESERVATION IS DONE";?> </h6> 
<img id="img" src="images/res.png"/>
<h5><?php echo "Thank you for using TRAVEL ADDICT !";?></h5>
<br><br>
<div id="link">
<a href="trip offers.php"> Go back </a> <tr>
<a> | </a>
<a href="clientmanager.php"> See remaining solde </a>
</div>
<?php
?>
</body>
</html>
