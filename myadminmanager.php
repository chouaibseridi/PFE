<html>
  <head> 
      <meta charset="utf-8"/>
      <title> My account </title>
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
       <p id="titre2"> My Account ! </p>
<button class="accordion">Account details</button>
<div class="panel"><br>
<form method="post" action="test2.php">
New pseudo <br><input type="text" name="newpseudo"/> <button type="submit" name="changepseudo" value="cp"> Change </button><br>
New password <br><input type="text" name="newpass"/> <button type="submit" name="changepass" value="cps"> Change </button><br>
New email <br><input type="text" name="newemail"/> <button type="submit" name="changeemail" value="cem"> Change </button><br>
</form>  
  </div>

<button class="accordion">My information</button>
<div class="panel"><br>
<form method="post" action="information.php">
First name <br> <input type="text" name="firstname"/><br>
Last name <br> <input type="text" name="lastname"/><br>
Address <br> <input type="text" name="adress"/><br>
Phone number <br> <input type="text" name="tel"/><br><br>

<button type="submit" name="save" value="save"> Save </button>
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