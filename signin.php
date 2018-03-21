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

 <!-- login php -->
<?php
session_start();
?>
<?php if ($_POST['lg']=="login")
{
$_SESSION["em"]=$_POST['email']; 
$_SESSION["pw"]=$_POST['password'];
mysql_connect("localhost","root","");
mysql_select_db("traveladdict");
$reponse=mysql_query("SELECT * FROM inscription");
$nbr=0; 
$nbra=0; $nbrc=0;
$nbr2=0;
while ($donne=mysql_fetch_array($reponse))
{
if ((($donne ['email'])==$_SESSION["em"]) && (($donne ['password'])==$_SESSION["pw"])) { $nbr=$nbr+1; if (($donne ['type'])=="a") {$nbra=$nbra+1;} else {$nbrc=$nbrc+1;}}
elseif ((($donne ['email'])==$_SESSION["em"]) && (($donne ['password'])!=$_SESSION["pw"])) {$nbr2=$nbr2+1;}
} 

if ($nbr>0) {if ($nbra>0) {header("Location: administration.php");
} else {echo ": client";header("Location: travelclient.php");
}}
elseif ($nbr2>0) { ?><h6> <?php echo "Wrong password, please try again :D ";?> </h6> <?php
}
else { ?><h6> <?php echo "Email doesn't exists :( ";?> </h6> <?php
;}
}
?>
</body>
</html>