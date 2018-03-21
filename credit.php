<?php
// Start the session
session_start();
?>

<?php if ($_POST['credit']=="credit")
{
$oem= $_SESSION["em"];
mysql_connect("localhost","root","");
mysql_select_db("traveladdict");
$reponse=mysql_query("SELECt * FROM`inscription` WHERE `email`='$oem'");
while ($donne=mysql_fetch_array($reponse))
{
?>
<table border="2px solid black">
<tr>
<th>firstname: <?php echo $donne['firstname'];?> </th>
<th>lastname: <?php echo $donne['lastname'];?> </th>
<th>credit: <?php echo $donne['cardcredit'];?> </th>
</tr>
</table>
<?php
}
}
?>

