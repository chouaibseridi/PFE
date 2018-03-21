
<?php if ($_POST['supp']=="sup")
{
$id=$_POST['id']; 
mysql_connect("localhost","root","");
mysql_select_db("traveladdict");
$reponse=mysql_query("SELECT * FROM voyage");
while ($donne=mysql_fetch_array($reponse))
{if (($donne['id']==$id)) 
{ 
mysql_query("DELETE FROM `voyage` WHERE `id`='$id'");
}
}
header("Location: tripmanage.php");

}
?>
