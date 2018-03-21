<?php
// Start the session
session_start();
?>
<?php if ($_POST['save']=="save")
{
$firstname=$_POST['firstname']; 
$lastname=$_POST['lastname']; 
$adress=$_POST['adress']; 
$tel=$_POST['tel']; 

$oem= $_SESSION["em"];
mysql_connect("localhost","root","");
mysql_select_db("traveladdict");
mysql_query("UPDATE `inscription` SET `firstname`='$firstname',`lastname`='$lastname',`adress`='$adress',`phone`='$tel' WHERE `email`='$oem'");
echo "done";
header("Location: myadminmanager.php");

}
?>