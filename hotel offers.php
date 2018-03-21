<html>
<head>
 <link rel="stylesheet" href="css/travel.css?version=1">
 <meta charset="utf-8"/>
 <title> Hotel Offers </title>
</head>
<style>
#menu 
{
background-color: black;
color: white;
font-family: advent pro;
font-size: 20px;
width: 200px;
text-align:center;
margin:auto;
margin-top:-10px;
padding-top:20px;
padding-bottom:10px;
border-radius:0px 0px 25px 25px;
padding-left:4px;
margin-bottom:30px;
}

#menu a
{color:white;
text-decoration:none;}
#menu a:hover
{color:yellow;}
</style>
<body>
<div id="menu">
<a href="travelclient.php"> HOME </a> 
<a> | </a>
<a href="logout.php"> LOGOUT </a>
</div>
<p id="s2title2"> HOTEL OFFERS </p>

<div id="hotels">
<?php
{
mysql_connect("localhost","root","");
mysql_select_db("traveladdict");
$reponse=mysql_query("SELECT * FROM hotel");
while ($donne=mysql_fetch_array($reponse))
{
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
}
?>
 </div>

</body>
</html>