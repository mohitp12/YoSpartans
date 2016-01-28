<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Most Visited</title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/camera.css">
     <link rel="stylesheet"  href="css/component.css" />
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
     <script src="js/camera.js"></script>
     <!--[if (gt IE 9)|!(IE)]><!-->
     <script src="js/jquery.mobile.customized.min.js"></script>
     <!--<![endif]-->
    <script src="js/modernizr.custom.js"></script>
     <script>
       $(document).ready(function(){
        jQuery('#camera_wrap').camera({
            loader: 'pie',
            pagination: true ,
            minHeight: '200',
            thumbnails: true,
            height: '40.85106382978723%',
            caption: true,
            navigation: true,
            fx: 'mosaic'
          });
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
     
     <body class="page1" id="top">
     
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
                 <li  class="current"><a href="services.php">Services</a></li>
                 <li><a href="gallery.php">Gallery</a></li>
                 
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
<br>
<br>

<div class="container_12"> <div class="clear cl1"></div>
        <div class="serv"> 
<div class="grid_12">
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(array_key_exists('recentviews', $_COOKIE))
{
    $cookie = $_COOKIE['recentviews'];
    $cookie = unserialize($cookie);
    
    $x = array_count_values($cookie);
    arsort($x);
    $x = array_slice($x,0,5,true);
    foreach ($x as $key => $value)
    {       
       
        switch ($key) {
            case '1' :
                echo '
           <div class="grid_4">
            <img src="images/page2_img1.jpg" alt="">
            <div class="text1"><a href="#">Paradise Apartments </a></div>
        </div>';
                break;
                
            case '2':
                echo '<div class="grid_4">
      <img src="images/page2_img2.jpg" alt="">
      <div class="text1"><a href="#">Heaven Condominiums </a></div>
    </div>';
                break;
                
            case '3':
                echo '<div class="grid_4">
      <img src="images/page2_img3.jpg" alt="">
      <div class="text1"><a href="#">Creek Apartments</a></div>
    </div>';
    
                break;
                
            case '4':
                echo '<div class="grid_4">
      <img src="images/page2_img4.jpg" alt="">
      <div class="text1"><a href="#">Superior Ink Condominiums</a></div>
    </div>';
                break;
                
            case '5':
                echo '<div class="grid_4">
      <img src="images/page2_img5.jpg" alt="">
      <div class="text1"><a href="#">Garden Apartments </a></div>
    </div>';
                break;
                
            case '6':
                echo '<div class="grid_4">
      <img src="images/page2_img6.jpg" alt="">
      <div class="text1"><a href="#">Liberty Green Condominiums </a></div>
    </div>
    ';
                break;
            case '7':
                echo '<div class="grid_4">
      <img src="images/page2_img7.jpg" alt="">
      <div class="text1"><a href="#">Apartment Square</a></div>
    </div>';
                break;
                
                case '8':
                    echo '<div class="grid_4">
      <img src="images/page2_img8.jpg" alt="">
      <div class="text1"><a href="#">One57</a></div>
    </div>';
                    break;
                    
            case '9':
                echo ' <div class="grid_4">
      <img src="images/page2_img9.jpg" alt="">
      <div class="text1"><a href="#">Urban Village Apartments</a></div>
    </div>
    ';
                break;
            
            
            case '10':
                echo '<div class="grid_4">
      <img src="images/page2_img10.jpg" alt="">
      <div class="text1"><a href="#">One Jackson Square</a></div></div>';
                break;
            
            
        }
    }
}
?>
</div>
        </div>
    <h3 style="text-align: center;"><a href="http://www.yospartans.com/services.php" class="btn">&lt Back</a></h3>
</div>
<!--==============================footer=================================-->
<br>

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
    <script src="js/classie.js"></script>

    <script src="js/thumbnailGridEffects.js"></script>

</body>
</html>

