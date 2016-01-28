<?php

$db = new mysqli('<server_name>', '<username>', '<password>', '<db_name>');

if(!$db){
    die('Could not connect: ' . mysql_error());
}

$query = $db->query("SELECT services.id, services.service_init, services.service_name, services.service_info, services.service_addr, AVG(service_rating.rating_value) AS rating FROM services LEFT JOIN service_rating ON services.id = service_rating.service_id GROUP BY services.id");

//SELECT services.id, services.service_init, services.service_name, services.service_info, services.service_addr, AVG(service_rating.rating_value) AS rating FROM services LEFT JOIN service_rating ON services.id = service_rating.service_id GROUP BY services.id"
$services = array();

while($row = $query->fetch_object())
{
    $services [] = $row;
}
//print_r($services);
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
      <h2>Services</h2>
      This site recommends off Campus living for San Jose State University students on the basis of their needs and requirements.<br/>There are different type of apartments and condominiums.
      <br/>There is also a near future implementation of crime based area suggestions near the San Jose Downtown and University area.
      <hr />

    <span style="color: #009b97;"><strong><em>You can also find roommates online from this </em></strong></span><span style="color: #009b97;"><strong><em>site.</em></strong></span>
    </div>
    <form action="cookie_first.php" method="post">  
    <div class="clear cl1"></div>
  
    <div class="serv">
       <div class="container_12">
           
        <?php foreach($services as $service):?>
       
                        <div class="grid_4">
                            <img src="images/page2_img<?php echo $service->id; ?>.jpg" alt="">
                            <div class="text1"><a href="#"><?php echo $service->service_name;  ?></a></div>
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
                            
                            <div class="alright"><button type="submit" style="margin-bottom : 30px" name="page"  value="<?php echo $service->id; ?>" id="info">More</button></div>
                        </div>                       
                    
        <?php endforeach; ?>
        </div>
    </div>
    </form>
      
     <br/>
     <h3 style="text-align: center;"><a href="cookie.php">Click Here to know recently visited Apartments or Condominiums.</a></h3>
      <br/>
      <h3 style="text-align: center;"><a href="mostvisited.php">Click here to get most visited products</a></h3>
      
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

