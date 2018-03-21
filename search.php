<html>
<head>
 <link rel="stylesheet" href="css/travel.css?version=1">

 <meta charset="utf-8"/>
 <title> Available Offers </title>
</head>
<style>
#s2title4
{
margin-top:-20px;
color:#556080;
padding-top:50px;
font-family:advent pro;
Font-size:30px;
text-align:left;
text-decoration:underline;
}
</style>
<body>
<p id="s2title2"> AVAILABLE OFFERS </p>
<div id="hotels">
<p id="s2title4"> Available Trips </p>
<?php
// Start the session
session_start();
?>
<?php if ($_POST['find']=="find")
$find=$_POST['search'];
mysql_connect("localhost","root","");
mysql_select_db("traveladdict");
$reponse=mysql_query("SELECT * FROM voyage");
$found=true;
while ($donne=mysql_fetch_array($reponse))
{
 if (($donne['pays']==$find) || ($donne['ville']==$find))
{
$found=true;
 ?> 
<div id="offre1"> 
 <img src="images/<?php echo $donne['imagesrc'];?>.jpg" id="img"><br> 
 <p id="dest"> <?php echo $donne['ville'];?> | <?php echo $donne['pays'];?> </p> 
 <p id="price" style="float:right; margin-right:5px;"> Price | <?php echo $donne['prix'];?> $ </p>
 <p id="dated" style="margin-top:40px; color: green;" > > <?php echo $donne['datealler'];?> </p>
 <p id="dater" style="color: green;"> < <?php echo $donne['dateretour'];?> </p>
 <button id="bookbutton"  onclick="location.href='<?php echo "reserver_voyage.php?id=".($donne['id'])."" ?>';"> </button>
</div> <?php
}
 else {$found=false;}
}
if ($found==false)
{echo "There is no trip to your destination !";}

?><p id="s2title4"> Available Hotels </p><?php

$reponse=mysql_query("SELECT * FROM hotel");
$found=true;
while ($donne=mysql_fetch_array($reponse))
{
 if (($donne['pays']==$find) || ($donne['ville']==$find))
{
$found=true;
?>
<div id="offre1"> 
 <img src="images/<?php echo $donne['imagesrc'];?>.jpg" id="img"><br> 
 <p id="dest"> <?php echo $donne['ville'];?> | <?php echo $donne['pays'];?> </p> 
 <p id="price" style="float:right; margin-right:5px;"> Price | <?php echo $donne['prix'];?> $ </p>
 <p id="dated" style="margin-top:40px; color: green;" >  <?php echo $donne['nom'];?> </p>
 <p id="dater" style="color: green;">  <?php echo $donne['lit'];?> lits </p>
 <button id="bookbutton"  onclick="location.href='<?php echo "reserver_hotel.php?id=".($donne['id'])."" ?>';"> </button>
</div> 
<?php
}
 else {$found=false;}
}
if ($found==false)
{echo "There is no available hotel in your destination !";}

?>
</div>


</body>
</html>