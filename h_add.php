<html>
<head>

 <meta charset="utf-8"/>
 <title> Add Hotel </title>
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


<?php if ($_POST['add']=="ad")
{
$pays=$_POST['pays'];
$ville=$_POST['ville'];
$nom=$_POST['nom'];
$lit=$_POST['lit']; 
$prix=$_POST['prix']; 
$img=$_POST['img']; 


mysql_connect("localhost","root","");
mysql_select_db("traveladdict");
mysql_query("INSERT INTO `hotel` (`pays`, `ville`, `nom`, `lit`,`prix`,`imagesrc`) VALUES ('$pays', '$ville', '$nom', '$lit','$prix','$img')");

}
?>

<h6><?php echo "Hotel has been added successfully !";?> </h6> 
</body>
</html>