<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Gallery</title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/touchTouch.css">
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
     <script src="js/touchTouch.jquery.js"></script>
     <script>
       $(document).ready(function(){
        $('.gallery a.gal').touchTouch();
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
                 <li class="current"><a href="gallery.php">Gallery</a></li>
                 
                 <li><a href="contacts.php">Contacts</a></li>
                <!--<li><a href="users.html">Users</a></li>-->
                 
                <?php
                        session_start();
                        if (isset($_SESSION["login_session"]))
                        {
                            $tmp = $_SESSION["login_session"];
                            echo '<li><a href="profile.php">';
                            print_r($tmp);
                            echo '</a></li>';
                        }
                        else
                        {
                            echo '<li><a href="login.php">Log In</a></li>';
                        }
                 
                ?>
               </ul>
            </nav>
           <div class="clear"></div>
        </div>
      </div>      
   </div>
</header>
<!--==============================Content=================================-->
<div class="content">
  <div class="container_12">
    <div class="grid_12">
      <h2>Gallery</h2>
    </div>
    <div class="clear"></div>
    <div class="gallery">
      <div class="grid_4"><a href="images/big1.jpg" class="gal"><img src="images/page3_img1.jpg" alt=""></a></div>
      <div class="grid_4"><a href="images/big2.jpg" class="gal"><img src="images/page3_img2.jpg" alt=""></a></div>
      <div class="grid_4"><a href="images/big3.jpg" class="gal"><img src="images/page3_img3.jpg" alt=""></a></div>
      <div class="clear"></div>
      <div class="grid_4"><a href="images/big4.jpg" class="gal"><img src="images/page3_img4.jpg" alt=""></a></div>
      <div class="grid_4"><a href="images/big5.jpg" class="gal"><img src="images/page3_img5.jpg" alt=""></a></div>
      <div class="grid_4"><a href="images/big6.jpg" class="gal"><img src="images/page3_img6.jpg" alt=""></a></div>
    </div>
  </div>
</div>
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

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
