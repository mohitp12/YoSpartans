<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Log In</title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="css/tooltipster.css" />
     <link rel="stylesheet" href="css/style.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.2.1.js"></script>
     <script src="js/script.js"></script> 
     <script src="js/superfish.js"></script>
     <script src="js/jquery.ui.totop.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.mobilemenu.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/jquery.tooltipster.js"></script>
     <script>
       $(document).ready(function(){
        $().UItoTop({ easingType: 'easeOutQuart' });
        $('.tooltip').tooltipster();
        });
     </script>

     <!--[if lt IE 9]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">


    <![endif]-->
     </head>
     
     <body class="" id="top">
     
<!--==============================header=================================--> 
<header>  
  <div class="container_12">
    <div class="grid_12">
        <h1>
        <a href="index.php">
          <img src="images/logo.jpg" alt="Your Happy Family">
        </a>
      </h1>
        <div class="menu_block ">
          <nav class="horizontal-nav full-width horizontalNav-notprocessed">
            <ul class="sf-menu">
                 <li><a href="index.php">Home</a></li>
                 <li><a href="services.php">Services</a></li>
                 <li><a href="gallery.php">Gallery</a></li>
                 
                 <li><a href="contacts.php">Contacts</a></li>
                 <!--<li><a href="users.html">Users</a></li>-->
                 
                 <li><a href="http://yospartans.com/logout.php">Log Out</a></li>
                 
               
                 
            </ul>
            </nav>
           <div class="clear"></div>
        </div>
      </div>      
   </div>
</header>
    
   
<body>
<div class="container_12" id="profile" style="width: 50%; margin: 0 auto; text-align: center;">
    <h2><b>Welcome Back  
        <?php session_start(); print_r($_SESSION["login_session"]); ?>
    </b></h2>
</div>
    
    <div class="container_12" style="width: 50%; margin: 0 auto; text-align: center;">
        <img scr="http://www.yospartans.com/images/profile.jpeg" alt="profile picture" width="300" height="300"/>
        <br>
        <br>
        <h2>Users</h2>
        <hr>
        <h4><a href="http://www.yospartans.com/insert.html#toregister">Insert information here</a>
        <br/>
        <a href="http://www.yospartans.com/fetch.html#toregister">Search the users over here!</a>
        <br/>
        <a href="http://www.yospartans.com/allin.php">Show all the users</a>
        <br/>
    </h4>
        
    </div>
</body>


<!--==============================footer=================================-->
<footer>   
    <div class="container_12">
      
      <div class="grid_12">
         <div class="socials">
      <section id="facebook">
        <a href="#" target="_blank"><span id="fackbook" class="tooltip" title="Link us on Facebook">f</span></a>
        </section>
        <section id="twitter">
        <a href="#" target="_blank"><span id="twitter-default" class="tooltip" title="Follow us on Twitter">t</span></a>
        </section>      
        <section id="google">
        <a href="#" target="_blank"><span id="google-default" class="tooltip" title="Follow us on Google Plus">g<span>+</span></span></a>
        </section>        
        <section id="rss">
        <a href="#" target="_blank"><span id="rss-default" class="tooltip" title="Follow us on Dribble">d</span></a>
        </section>
       
      

        </div>
        <div class="copy">
            YoSpartans!   |   Website designed by Mohit Patel
        </div>
         
      </div>
    </div>  
</footer>
</body>
</html>

