<?php
    extract($_POST);
    $user = 'mohit';
    $pass = 'admin';
   // $db = 'proj272';

    if(!($db = mysql_connect('<server_name>', '<username>', '<password>')))
        die("Couldn't connect to database");

    if(!mysql_select_db("cmpe272",$db))
        die("Couldn't open testdb database");

    $query = "INSERT INTO user(name, address, username, password) VALUES ('".$name."','".$adr."','".$usrname."','".$password."')"; 


    if(!($result = mysql_query($query,$db))){
        print("couldn't execute query!");
        die(mysql_error());
    }
    else {
        
        //print("Record added successfully!! ");
            // curl --data "name=".$name."&adr=".$adr."&usrname=".$usrname."&password=".$password" http://www.chenyuwu.com/userpost.php;
       $url='www.chenyuwu.com/userpost.php';

       $ch = curl_init($url);
       $data = array('name' => $name, 'adr' => $adr, 'username' => $usrname, 'password' => $password);
       curl_setopt($ch, CURLOPT_POST, 1);
       curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       $response = curl_exec($ch);
       curl_close($ch);
    }
    mysql_close($db);

?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Market Place</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Market Place </h1>
                           
                        </div>
                    </div>
                    
                   
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>User created successfully</h3>
                                    <p><?php echo $name;?> you can now login with your account</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>

                            <div class="form-bottom">
			                        <a href="index.php"><button type="submit" class="btn" id="test">Sign in!</button></a>
		            </div>
                           
                        </div>
                    </div>
                    </form>
                  
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>