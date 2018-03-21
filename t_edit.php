<html>
<head>

 <meta charset="utf-8"/>
 <title> Edit Trip </title>
</head>
<style>
body
{width:100%;
margin:auto;
background-image:url("https://www.transparenttextures.com/patterns/food.png");
background-color: #f4f5e2;}
h6
{
color:#556080;
margin-top:250px;
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

<?php if ($_POST['upd']=="up")
{
$id=$_POST['id']; 
$pays=$_POST['pays']; 
$ville=$_POST['ville'];
$da=$_POST['da'];
$dr=$_POST['dr']; 
$prix=$_POST['prix']; 
$img=$_POST['img']; 

mysql_connect("localhost","root","");
mysql_select_db("traveladdict");
$reponse=mysql_query("SELECT * FROM voyage");
while ($donne=mysql_fetch_array($reponse))
{if (($donne['id']==$id)) { 
mysql_query("UPDATE `voyage` SET `id`='$id',`pays`='$pays',`ville`='$ville',`datealler`='$da',`dateretour`='$dr',`prix`='$prix',`imagesrc`='$img' WHERE `id`='$id'");
echo "trip edited";
}
}
}
?>
<h6><?php echo "Trip has been edited successfully !";?> </h6> 
</body>
</html>