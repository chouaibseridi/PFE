<?php
// Start the session
session_start();
?>
<?php if ($_POST['changeemail']=="cem")
{
$em=$_POST['newemail']; 
$oem= $_SESSION["em"];
mysql_connect("localhost","root","");
mysql_select_db("traveladdict");
mysql_query("UPDATE `inscription` SET `email`='$em' WHERE `email`='$oem'");
unset($_SESSION);
header("Location: index.php");
}
?>
<?php if ($_POST['changepass']=="cps")
{
$oem= $_SESSION["em"];

$pw=$_POST['newpass']; 
mysql_connect("localhost","root","");
mysql_select_db("traveladdict");
mysql_query("UPDATE `inscription` SET `password`='$pw' WHERE `email`='$oem'");
header("Location: myadminmanager.php");
 
}
?>
<?php if ($_POST['changepseudo']=="cp")
{
$oem= $_SESSION["em"];
echo $oem;
$ps=$_POST['newpseudo']; 
echo $ps;
mysql_connect("localhost","root","");
mysql_select_db("traveladdict");
mysql_query("UPDATE `inscription` SET `pseudo`='$ps' WHERE `email`='$oem'");
 header("Location: myadminmanager.php");
}
?>