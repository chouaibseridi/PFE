<html>
  <head> 
      <meta charset="utf-8"/>
      <title> Administration </title>
      <link rel="stylesheet" type="text/css" href="css/admin.css?version=1">
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

 <p>Hello <?php echo $donne['firstname'];?> <?php echo $donne['lastname'];?> </p>


<?php
}
}
?></div>
      <a href="logout.php" id="logout"> Log Out </a>
	  </div>
	  
  	  <div id="contenaire">
      <p id="titre2"> Web site manager ! </p>
	  <div id="serv">
	 <a href="tripmanage.php"> <img src="photos/1001.jpg?version=1" onmouseover="this.src='photos/100.jpg?version=1'" onmouseout="this.src='photos/1001.jpg?version=1'"></img></a>
	 
<a href="hotelmanage.php"> <img src="photos/1002.jpg?version=1" onmouseover="this.src='photos/102.jpg?version=1'" onmouseout="this.src='photos/1002.jpg?version=1'"></img></a>

	 
	  </div>
	    <div id="serv">
	 <a href="myadminmanager.php"> <img src="photos/1003.jpg?version=1" onmouseover="this.src='photos/103.jpg?version=1'" onmouseout="this.src='photos/1003.jpg?version=1'"></img></a>
	
	 
	  </div>
	  

      </div>
  </body>    