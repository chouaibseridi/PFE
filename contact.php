<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
  <script src="js/contact.js" type="text/javascript"></script>


  
  
      <link rel="stylesheet" href="css/contact.css">

  
</head>
<style>
#menu 
{
background-color: #394141;
color: white;
font-family: advent pro;
font-size: 20px;
width: 200px;
text-align:center;
margin:auto;
padding-top:20px;
padding-bottom:10px;
border-radius:25px 25px 0px 0px;
padding-left:4px;
position:absolute;
bottom:0;
left:600px;
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
  <div id='browser'>
  <div id='browser-bar'>
    <div class='circles'></div>
    <div class='circles'></div>
    <div class='circles'></div>
    <p>Contact Us</p>
    <span class='arrow entypo-resize-full'></span>
  </div>
  <div id='content'>
    <div id='left'>
      <div id='map'>
        <p>Where To Find Us</p>
        <div class='map-locator'>
          <div class='tooltip'>
            <ul>
              <li>
                <span class='entypo-location'></span>
                <span class='selectedLocation'>Algeria</span>
              </li>
              <li>
                <span class='entypo-mail'></span>
                <a href='#'>traveladdict@gmail.com</a>
              </li>
              <li>
                <span class='entypo-phone'></span>
                (+213 6) 982 816 78
              </li>
            </ul>
          </div>
        </div>
        <div class='zoom'></div>
      </div>
      <ul id='location-bar'>
        <li>
          <a class='location' >Europe</a>
        </li>
        <li>
          <a class='location' >Asia</a>
        </li>
        <li>
          <a class='location' >Northern America</a>
        </li>
        <li>
          <a class='location' >Africa</a>
        </li>
      </ul>
    </div>
    <div id='right'>
      <p>Connect</p>
      <div id='social'>
        <a class='social'>
          <span class='entypo-facebook'></span>
        </a>
        <a class='social'>
          <span class='entypo-twitter'></span>
        </a>
        <a class='social'>
          <span class='entypo-linkedin'></span>
        </a>
        <a class='social'>
          <span class='entypo-gplus'></span>
        </a>
        <a class='social'>
          <span class='entypo-instagrem'></span>
        </a>
      </div>
      <form>
        <p>Get in Contact</p>
        <input placeholder='Email' type='email'>
        <input placeholder='Subject' type='text'>
        <textarea placeholder='Message' rows='4'></textarea>
        <input placeholder='Send' type='submit'>
      </form>
      <p>other way</p>
      <p class='other entypo-mail'>
        <a href='#'>traveladdict@gmail.com</a>
      </p>
      <p class='other entypo-phone'>(+213 6) 982 816 78</p>
    </div>
  </div>
</div>
<div id="menu">
<a href="javascript:history.back()"> HOME </a> 
<a> | </a>
<a href="logout.php"> LOGOUT </a>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/contact.js"></script>

</body>
</html>
