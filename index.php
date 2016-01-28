<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Home</title>
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
                 <li class="current"><a href="index.php">Home</a></li>
                 <li><a href="services.php">Services</a></li>
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
<div class="container_12">
  <div class="grid_12">
    <div class="slider_wrapper ">
       <div class="camera_wrap" id="camera_wrap">
            <div data-thumb="images/thumb.png" data-src="images/slide.jpg">
                <div class="caption fadeFromBottom">
                    Best solutions for accomodation near SJSU
                </div>
            </div>
            <div data-thumb="images/thumb1.jpg" data-src="images/slide1.jpg">
                <div class="caption fadeFromBottom">
                    Homes near grocery stores
                </div>
            </div>
            <div data-thumb="images/thumb2.png" data-src="images/slide2.jpg">
                <div class="caption fadeFromBottom">
                    Apartments and Condominiums with great Amenities
                </div>
            </div>
            <div data-thumb="images/thumb3.png" data-src="images/slide3.jpg">
                <div class="caption fadeFromBottom">
                  Apartments and Condominiums of all categories
                </div>
            </div>           
        </div>
    </div>
  </div>
</div>
<div class="page1_block">
  <div class="container_12">
    <div class="grid_12">
      <div class="center">
        <h2>Welcome! Spartans</h2>
        You can find your accomodation here.
        
      </div>
    </div>
  </div>
</div>
<!--==============================Content=================================-->
<div class="content">
  <div class="container_12">
    <div class="grid_12 center">
      <h3>Featured Works</h3>
      <section class="tt-grid-wrapper">
        <ul class="tt-grid tt-effect-stackback tt-effect-delay">
          
          <li><a href="#"><img src="images/feat1.jpg" alt="img01"></a></li>
          <li><a href="#"><img src="images/feat2.jpg" alt="img02"></a></li>
          <li><a href="#"><img src="images/feat3.jpg" alt="img03"></a></li>
          <li><a href="#"><img src="images/feat4.jpg" alt="img04"></a></li>
          <li><a href="#"><img src="images/feat5.jpg" alt="img05"></a></li>
          <li><a href="#"><img src="images/feat6.jpg" alt="img06"></a></li>
        </ul>
        <nav>
          <a class="tt-current"></a><a></a><a></a><a></a>
        </nav>
      </section>
      <div class="clear"></div>
      
    </div>
  </div>
  <div class="hor"></div>
  <div class="container_12">
    <div class="grid_12 center">
      <h3>Services</h3>
    </div>
    <div class="grid_3">
      <h4>Articles</h4>
      <img src="images/page1_img1.jpg" alt="" class="img_inner">
        Finding more options??
      
    </div>
   
    
    <div class="grid_3">
      <h4>Looking for Sublets??</h4>
      <ul class="list">
        <li><a href="#">Korem ipsum dolor sitilo</a></li>
        <li><a href="#">Pmet, tetur adipiscing eli</a></li>
        <li><a href="#">On mollis eratttis nequ </a></li>
        <li><a href="#">Gacilisis, sit amet ultre</a></li>
        <li><a href="#">Mcies erat rutrumsu </a></li>
        
      </ul>    
      
    </div>
      
      <div class="grid_3">
          <br>
          <br>
      <h4>Have a look at Cosmy Market==></h4>
      </div>
    <div class="grid_3">
        <br>
        <br>
        <a href="http://cosmy.yospartans.com/home.php" class="gal"><img src="images/cosmymarket.JPG" alt="cosmy"></img></a>
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
    <script src="js/classie.js"></script>

    <script src="js/thumbnailGridEffects.js"></script>

</body>
</html>

