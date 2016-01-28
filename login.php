<?php

session_start();// Starting Session
$database = "cmpe272";
$error='Not Runnable'; // Variable To Store Error Message

$conn = mysql_connect('<server_name>', '<username>', '<password>');

if (!$conn) { 
    die('Could not connect: ' . mysql_error()); 
} 
//print_r('Connected successfully <br/>'); 

mysql_select_db($database,$conn);
if(!mysql_select_db($database,$conn))
        die("Couldn't find ".$database);
// SQL query to fetch information of registerd users and finds user match.
if (isset($_POST['user_name']) && isset($_POST['pass_word'])){
$username = $_POST['user_name'];
$pwd = $_POST ['pass_word'];

$sql = "SELECT * FROM user WHERE username = '".$username."' AND password = '".$pwd."' LIMIT 1";
$res = mysql_query($sql);

if (mysql_num_rows($res)== 1) {
    $_SESSION["login_session"]=$username;
    //echo $login_session;
    header("Refresh:0 ;url=http://yospartans.com/index.php");
    exit();
}
else {    
    echo "<p style = 'color: red'> Please enter a valid username & password.</p>";
    //exit();
}
}

?>




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
                <!-- <li><a href="users.html">Users</a></li>-->
                 
                <?php
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

<div style="width: 50%; margin: 0 auto; text-align: center;">
    <h2>
                <?php
                        if (isset($_SESSION["login_session"]))
                        {
                            $tmp = $_SESSION["login_session"];
                            echo $tmp.' you are already logged in';
                        }
                 ?>
    </h2>
</div>

<section>
    <br>
    <br>
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form autocomplete="on" action="login.php" method="post"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="user_name" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="pass_word" required="required" type="password" placeholder="************" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login"/> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form" >
                            <form autocomplete="on" action="insertdb.php" method="post"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="*************"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="*************"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>




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

