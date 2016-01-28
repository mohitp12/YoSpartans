<?php

$db = new mysqli('<server_name>', '<username>', '<password>', '<db_name>');

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
                        <h3>Average Ratings</h3>
                        <p>rating: <?php echo round($service->rating); ?>/5</p>   
                            <div class="rating-chooser">
                                                        
                                                           <?php if (round($service->rating) == 5): ?>
                                                         <div class="rating-wrap-post" >
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                        </div>
                                                         <?php endif; ?>
                                                         <?php if (round($service->rating) == 4): ?>
                                                         <div class="rating-wrap-post">
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" ></i>
                                                        </div>
                                                         <?php endif; ?>
                                                         <?php if (round($service->rating) == 3): ?>
                                                         <div class="rating-wrap-post">
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" ></i>
                                                             <i class="fa fa-star" ></i>
                                                        </div>
                                                         <?php endif; ?>
                                                         <?php if (round($service->rating) == 2): ?>
                                                         <div class="rating-wrap-post">
                                                            <i class="fa fa-star" style="color: #FFD700;"></i>
                                                            <i class="fa fa-star" style="color: #FFD700;"></i>
                                                            <i class="fa fa-star" ></i>
                                                            <i class="fa fa-star" ></i>
                                                            <i class="fa fa-star" ></i>
                                                        </div>
                                                         <?php endif; ?>
                                                         <?php if (round($service->rating) == 1): ?>
                                                         <div class="rating-wrap-post">
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" ></i>
                                                             <i class="fa fa-star" ></i>
                                                             <i class="fa fa-star" ></i>
                                                             <i class="fa fa-star" ></i>
                                                        </div>
                                                         <?php endif; ?>
                                                         <?php if (round($service->rating) == 0): ?>
                                                         <div class="rating-wrap-post">
                                                            <i class="fa fa-star" ></i>
                                                            <i class="fa fa-star" ></i>
                                                            <i class="fa fa-star" ></i>
                                                            <i class="fa fa-star" ></i>
                                                            <i class="fa fa-star" ></i>
                                                            
                                                        </div>
                                                         <?php endif; ?>
                                                            
                            </div>
                        </div>
                            
                        <div class="grid_12">
                        <h3>Rate this service</h3>
                        
                        <center><div class="rating" style="align-content : center;margin-left: 415px ">
                                                            <input type="radio" id="star1" name="rating" value="1" onclick="redirect5()"/><label class = "full" for="star1" title="Awesome - 5 stars"></label>    
                                                            <input type="radio" id="star2" name="rating" value="2" onclick="redirect4()"/><label class = "full" for="star2" title="Pretty good - 4 stars"></label>
                                                            <input type="radio" id="star3" name="rating" value="3" onclick="redirect3()"/><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                                            <input type="radio" id="star4" name="rating" value="4" onclick="redirect2()"/><label class = "full" for="star4" title="Kinda bad - 2 stars"></label>
                                                            <input type="radio" id="star5" name="rating" value="5" onclick="redirect1()"/><label class = "full" for="star5" title="Sucks big time - 1 star"></label>
                                                            
                                                            
                                                            <script type="text/javascript">
        
                                                                    function redirect1() {
                                                                       window.location="http://www.yospartans.com/rate.php?service=<?php echo $service->id; ?>&rating=1";
                                                                    }
                                                                    
                                                                    function redirect2() {
                                                                       window.location="http://www.yospartans.com/rate.php?service=<?php echo $service->id; ?>&rating=2";
                                                                    }
                                                                    
                                                                    function redirect3() {
                                                                       window.location="http://www.yospartans.com/rate.php?service=<?php echo $service->id; ?>&rating=3";
                                                                    }
                                                                    
                                                                    function redirect4() {
                                                                       window.location="http://www.yospartans.com/rate.php?service=<?php echo $service->id; ?>&rating=4";
                                                                    }
                                                                    
                                                                    function redirect5() {
                                                                       window.location="http://www.yospartans.com/rate.php?service=<?php echo $service->id; ?>&rating=5";
                                                                    }

                                                              </script>
                            </div></center>
                        
                        
                        
                        
                        </div>
                            
    <div class="grid_12">
      <h3>Contacts</h3>
            <div class="map">
            <figure class=" ">
                         <iframe width="600" height="450" frameborder="0" style="border:0" src="<?php echo $service->service_addr; ?>" allowfullscreen></iframe>
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

      
