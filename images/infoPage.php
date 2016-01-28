<?php

$db = new mysqli('yospartanscom1.fatcowmysql.com', 'mohit', 'admin', 'services');

if(!$db){
    die('Could not connect: ' . mysql_error());
}

$product = null;

if (isset($_GET['id']))
    {
        $id = (int)$_GET['id'];
        $service = $db->query("SELECT services.id, services.service_name, services.service_info, services.service_addr, AVG(service_rating.rating_value) AS rating FROM services LEFT JOIN service_rating ON services.id = service_rating.service_id WHERE services.id = {$id}")->fetch_object();
    }

?>

<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Services</title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
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
                 <li class="current"><a href="services.php">Services</a></li>
                 <li><a href="gallery.php">Gallery</a></li>
                 
                 <li><a href="contacts.php">Contacts</a></li>
                 
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
                 <!--<li><a href="users.html">Users</a></li>-->
               </ul>
            </nav>
           <div class="clear"></div>
        </div>
      </div>      
   </div>
</header>
<br/>
<br/>
<!--========================================================================Body starts==============================================================-->
<div class="container_12">
    <h2 style="text-align:center;"><?php echo $service->service_name; ?></h2>
        <div class="grid_12" align="center">
            <div class="slider_wrapper ">
                <div class="camera_wrap" id="camera_wrap" >
                    <img src="images/acc<?php echo $service->id; ?>.jpg" alt="<?php echo $service->service_name; ?>" width="630" height="420" /> 
                        
                        <br/><br/>
                            <p><?php echo $service->service_info; ?></p>
                        <div class="grid_12">
                        <h3>Ratings</h3>
                            <div style="font-size: 20px; 
                                    display: inline-block;
                                    font: normal normal normal 14px/1 FontAwesome;
                                    font-size: inherit;
                                    text-rendering: auto;
                                    -webkit-font-smoothing: antialiased;
                                    -moz-osx-font-smoothing: grayscale;
                                    transform: translate(0, 0);" class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
        </div>
</div>
    <div class="grid_12">
      <h3>Contacts</h3>
            <div class="map">
            <figure class=" ">
                          <iframe src="<?php echo $servie->service_addr; ?>" width="600"></iframe> 
            </figure>
              
          </div>
    </div>
<hr>
<a href="http://www.yospartans.com/services.php" class="btn">&lt Back</a>
        </div>
    </div>
  </div>
</div>
  <br/>
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
    <script src="js/classie.js"></script>

    <script src="js/thumbnailGridEffects.js"></script>

    </body>
</html>

      
