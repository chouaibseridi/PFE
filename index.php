<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html"  charset="utf-8"/>
<title>Travel Addict</title>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/menu.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/reg.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/sidenav.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/rech_bar.css">











</head>

<body id="body">

<!--sidenav-->
<div id="mySidenav" class="sidenav">
  <p id="ftitle"> Sign In </p>
  <form class="modal-content animate" action="signin.php" id="form1" method="post">
    <div class="container">
      <label><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <input type="checkbox" checked="checked"> Remember me

      <div class="clearfix">
        <button type="button" onclick="closeNav()" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" name="lg" value="login">Sign in</button>
      </div>
    </div>
  </form>
  
</div>

<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main1">

 <!--page top banner-->
<div id="ban"> 
  <!--logo-->
  <div id="logo" > <a href=#> <img  src="images/logo.jpg" onmouseover="this.src='images/logo2.jpg'"; onmouseout="this.src='images/logo.jpg'"> </a></div>
    <!--menu-->
    <div id="menu">
    <div class="dropdown">
    <button class="dropbtn" onclick="window.location.href='index.php'">Home</button>
    </div>
    <div class="dropdown">
    <button class="dropbtn"onclick="window.location.href='contact.php'">Contact</button>
    </div>
    <div class="dropdown">
    <button class="dropbtn2" onclick="openNav()">Login</button>
    </div>
    </div>
</div>

<!--image slider-->

<div id="slider">
<img id="paris" src="images/1.jpg" alt="网页素材大全1" title="Paris" />
<img src="images/2.jpg" alt="网页素材大全2" title="Rome" />
<img src="images/3.jpg" alt="网页素材大全3" title="New York" />
<img src="images/4.jpg" alt="网页素材大全4" title="Shanghai" />
</div>
<div id="more"> <div id="explore"> <a href=#> <img  src="images/exp.jpg" onmouseover="this.src='images/exp_h.jpg'"; onmouseout="this.src='images/exp.jpg'"> </a> </div> </div>
</div>


<!--our services section-->

<div id="info"> 
<p id="s2title"> We are offering a huge <font color="green"> Travelling </font> database, several plans in different places with competitive <font color="red"> prices </font>.   </p>
<p id="s2title2"> HOW IT WORKS </p>
<div id="imgs">
<img id="m1" src="images/m1.jpg"/>
<img id="m2" src="images/m2.jpg"/>
<img id="m3" src="images/m3.jpg"/>
<img id="m4" src="images/m4.jpg"/>
</div>
<img id="s2" src="images/s2.jpg"/>
</div>

<!--Offers-->
<p id="s2title2"> BEST COMING TRIPS </p>
<div id="offres">
<div id="offre1"> 
 <img src="images/lond.jpg" id="img"><br> 
  <p id="dest"> London | UK </p> 
  <a href="#">More </a>
</div> 

<div id="offre2"> 
 <img src="images/1.jpg" id="img"><br> 
 <p id="dest"> Paris | France </p> 
  <a href="#">More</a>
</div> 

<div id="offre3"> 
 <img src="images/dub.jpg" id="img"><br> 
 <p id="dest"> Dubai | UAE </p> 
 <a href="#">More</a>
</div>
</div>








<!-- Registration Section -->

<form id="regform" method="post" action="regform.php"> 
 <h1> Sign up </h1>
 <h2> Register now and get a free E-payment Card. </h2>
 <label> Pseudo </label><br> <input type="text" id="pseudo" name="pseudo"> </input><br>
 <label> Email </label> <br><input type="text" id="pseudo" name="email"> </input><br>
 <label> Password </label><br> <input type="password" id="pseudo" name="password"> </input><br>
 <label> Type </label><br><input type="text" id="pseudo" name="type"> </input>
 <h3> By clicking send you agree on all terms and policy. </h3>
  <button type="submit" value="inscris_moi" name="ins" > Send </button>
</form> 

<!-- Footer-->

<img class="footer" src="images/footer2.jpg"/>

<div id="footmore"> 
<div id="sm">
<a href="https://www.facebook.com/chouaib.seridi"> Facebook </a><br>
<a href=#> Twitter </a><br>
<a href=#> Instagram </a>
</div>
<div id="ul">
<a href=#> Wordpress </a><br>
<a href=#> W3School </a><br>
<a href=#> Openclassroom </a>
</div>
<div id="des">
<a> TEL: +213698281678 </a><br>
<a> Adress: UBMA Annaba </a><br>
<a href="images/map.jpg"> Click here for map </a>
</div>
</div>



 



<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn1");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");
var btn4 = document.getElementById("myBtn4");
var btn5 = document.getElementById("myBtn5");
var btn6 = document.getElementById("myBtn6");
var btn7 = document.getElementById("myBtn7");
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 

btn1.onclick = function() {
    modal.style.display = "block";
}
btn2.onclick = function() {
    modal.style.display = "block";
}
btn3.onclick = function() {
    modal.style.display = "block";
}
btn3.onclick = function() {
    modal.style.display = "block";
}
btn4.onclick = function() {
    modal.style.display = "block";
}
btn5.onclick = function() {
    modal.style.display = "block";
}
btn6.onclick = function() {
    modal.style.display = "block";
}
btn3.onclick = function() {
    modal.style.display = "block";
}
btn4.onclick = function() {
    modal.style.display = "block";
}
btn5.onclick = function() {
    modal.style.display = "block";
}
btn6.onclick = function() {
    modal.style.display = "block";
}
btn7.onclick = function() {
    modal.style.display = "block";
	modalImg.src = img.src;
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>





<!--sidnav script-->
<script>
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
    document.getElementById("body").style.marginLeft = "300px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("body").style.marginLeft = "0";
  
	
}
</script>

<!--image slider script-->
<script src="js/jquery.min.js"></script>
<script src="js/slider.jquery.js"></script>
<script>
$( '#slider' ).lateralSlider( {
captionPadding: '0',
captionHeight: 45
} );
</script>

</script>
</body>
</html>