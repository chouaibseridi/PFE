<html>
  <head> 
      <meta charset="utf-8"/>
      <title> Trip Manager </title>
      <link rel="stylesheet" type="text/css" href="acceuil_css.css">
  </head>
  
  <body>
<style>
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
a
{margin-left:60px;
text-decoration:none;
font-size:18px;
font-family:BigNoodleTitling;}
a:hover
{margin-left:60px;
text-decoration:underline;
color:red;
font-size:18px;
font-family:BigNoodleTitling;}
</style>
</head>
<body>


 <div id="contenaire">
       <p id="titre2"> Trip manager ! </p>
<button class="accordion">Add Trip</button>
<div class="panel"><br>
<form method="post" action="t_add.php">
Pays <br><input type="text" name="pays"/><br>
Ville <br> <input type="text" name="ville"/><br>
Date aller <br> <input type="date" name="da"/><br>
Date retour<br><input type="date" name="dr"/><br>
Prix<br> <input type="text" name="prix"/><br>
Imagesrc<br> <input type="text" name="img"/><br><br>
<button type="submit" name="add" value="ad"> Ajouter </button>
</form>  
  </div>

<button class="accordion">Edit Trip</button>
<div class="panel"><br>
<p> Trip List </p><br>
<?php
{
mysql_connect("localhost","root","");
mysql_select_db("traveladdict");
$reponse=mysql_query("SELECT * FROM voyage");
while ($donne=mysql_fetch_array($reponse))
{
?>
<table border="2px solid black">
<tr>
<th>Id: <?php echo $donne['id'];?> </th>
<th>Pays: <?php echo $donne['pays'];?> </th>
<th>Ville: <?php echo $donne['ville'];?> </th>
<th>Date aller: <?php echo $donne['datealler'];?> </th>
<th>Date retour: <?php echo $donne['dateretour'];?> </th>
<th>Prix: <?php echo $donne['prix'];?> </th>
</tr>
</table>
<?php
}
}
?>
<br>
<form method="post" action="t_edit.php">
Id <br><input type="text" name="id"/><br>
Pays <br><input type="text" name="pays"/><br>
Ville <br><input type="text" name="ville"/><br>
Date aller <br><input type="date" name="da"/><br>
Date retour <br><input type="date" name="dr"/><br>
Prix <br><input type="text" name="prix"/><br>
Imagesrc<br> <input type="text" name="img"/><br><br>
<button type="submit" name="upd" value="up"> Modifier </button>
</form>
  </div>

<button class="accordion">Delete Trip</button>
<div class="panel"><br>
<p> Trip List </p><br>
<?php
{
mysql_connect("localhost","root","");
mysql_select_db("traveladdict");
$reponse=mysql_query("SELECT * FROM voyage");
while ($donne=mysql_fetch_array($reponse))
{
?>
<table border="2px solid black">
<tr>
<th>Id: <?php echo $donne['id'];?> </th>
<th>Pays: <?php echo $donne['pays'];?> </th>
<th>Ville: <?php echo $donne['ville'];?> </th>
<th>Date aller: <?php echo $donne['datealler'];?> </th>
<th>Date retour: <?php echo $donne['dateretour'];?> </th>
<th>Prix: <?php echo $donne['prix'];?> </th>
</tr>
</table>
<?php
}
}
?>
<br>
<form method="post" action="t_del.php">
Id  <input type="text" name="id"/>
<button type="submit" name="supp" value="sup"> supprimer </button>
</form>
</div>
<br>
<a href="administration.php"> Go Back </a>
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