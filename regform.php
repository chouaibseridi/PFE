<html>
<head>

 <meta charset="utf-8"/>
 <title> Edit Hotel </title>
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


<?php if ($_POST['ins']=="inscris_moi")
{
$ps=$_POST['pseudo'];
$pw=$_POST['password'];
$em=$_POST['email'];
$type=$_POST['type'];
mysql_connect("localhost","root","");
mysql_select_db("traveladdict");
$reponse=mysql_query("SELECT * FROM inscription");
$nbr=0; 
$nbra=0; $nbrc=0;
$nbr2=0;
while ($donne=mysql_fetch_array($reponse))
{
if (($donne ['email'])==$em)
{
$nbr=$nbr+1; 
}
else { $nbr2=$nbr2+1;}
}
if ($nbr>0)
{
?><h6> <?php echo " Email exists .. try again ! ";?> </h6> <?php 
}
elseif (($nbr2>0) && ($type=="a"))
 {
 $credit=0;
mysql_query("INSERT INTO inscription (pseudo,password,email,type,cardcredit) VALUES('$ps','$pw','$em','$type','$credit')");
mysql_close();
?><h6> <?php echo "Admin added successfully :D ";?> </h6> <?php
}
else 
{
 $credit=500;
mysql_query("INSERT INTO inscription (pseudo,password,email,type,cardcredit) VALUES('$ps','$pw','$em','$type','$credit')");
mysql_close();
?><h6> <?php echo " Client added successfully :D ";?> </h6> <?php
}


}
?>
</body>
</html>