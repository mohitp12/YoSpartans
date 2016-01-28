<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Contacts</title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" type="text/css" href="css/tooltipster.css" />
     <link rel="stylesheet" href="css/style.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.2.1.js"></script>
     <script src="js/script.js"></script> 
     <script src="js/superfish.js"></script>
     <script src="js/TMForm.js"></script>
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
                 
                 <li class="current"><a href="contacts.php">Contacts</a></li>
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
      <h2>Contacts</h2>
            <div class="map">
            <figure class=" ">
                          <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=San Jose,+California,+CA,+United+States&amp;aq=0&amp;sll=37.3370212,-121.8828387&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=San Jose,+Kings,+California&amp;ll=37.3370212,-121.8828387&amp;spn=0.01628,0.025663&amp;z=18&amp;iwloc=A&amp;output=embed"></iframe>
               </figure>
              
          </div>
    </div>  
    <div class="clear"></div>
    <div class="grid_5">
      <h3 class="head1">Find Us</h3>
      <!---------------------------------------------------PHP for retrieving contact information--------------------------------------------------------->
      <iframe src="http://www.yospartans.com/retrievecontact.php" height="200 px"></iframe>
    </div>
    <div class="grid_9">
      <h3 class="head1">Contact Form</h3>
            <form id="form">
                            
                      <div class="success_wrapper">
                      <div class="success-message">Contact form submitted</div>
                      </div>
                      <label class="name">
                      <input type="text" placeholder="Name:" data-constraints="@Required @JustLetters" />
                      <span class="empty-message">*This field is required.</span>
                      <span class="error-message">*This is not a valid name.</span>
                      </label>
                    
                      <label class="email">
                      <input type="text" placeholder="E-mail:" data-constraints="@Required @Email" />
                      <span class="empty-message">*This field is required.</span>
                      <span class="error-message">*This is not a valid email.</span>
                      </label>
                       <label class="phone">
                          <input type="text" placeholder="Phone:" data-constraints="@Required @JustNumbers"/>
                          <span class="empty-message">*This field is required.</span>
                          <span class="error-message">*This is not a valid phone.</span>
                          </label>
                      <label class="message">
                      <textarea placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                      <span class="empty-message">*This field is required.</span>
                      <span class="error-message">*The message is too short.</span>
                      </label>
                      <div>
                      <div class="clear"></div>
                      <div class="btns">
                      <a href="#" data-type="reset" class="btn">Clear</a>
                      <a href="#" data-type="submit" class="btn">Send</a>
                      </div>
                      </div>
                      </form>   
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

