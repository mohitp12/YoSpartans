<?php

session_start(); // Starting Session

extract($_POST);
$Flag = 0;

if( $username == "admin" && $password == "admin"){
$txtFile = fopen("users.txt","r");
	if($txtFile) {
		echo "Users are:<br> ";
		while( !feof($txtFile) ){

		 $Data = fgets($txtFile);
		 $Data = chop($Data);
		 $Data = explode(",",$Data,3);
		 echo "$Data[0] $Data[1]";
		 echo "<br>";

		}
		
	fclose($txtFile);
	}
	else
        {
			print("<b>File not found</b>");
	}
} 
elseif ( $username != null  && $password != null ){
	$User = fopen("users.txt","r");
    if($User) {
       while( !feof($User) ){

			$Data= fgets($User);
			$Data= chop($Data);
			$Data= explode(",",$Data,3);
			
			if( $username == $Data[0] && $password == $Data[1]){
				$Flag=1;
				$user_name = $Data[0];
			}
		}
		if($Flag){
			print(" <body><b>Welcome</b></body>");
			print("$username");
                        $_SESSION['login_user']=$username; // Initializing Session
                        header("location: profile.php"); // Redirecting To Other Page
		}
		else{
			print("<body><h1>Sorry! We couldn't find your account!</h1>");
			
		}
		fclose($myUser);
	} 
}

?>