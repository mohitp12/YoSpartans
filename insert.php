<?php 
//extract($_POST);
/* @var $firstname type */
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$address=$_POST['address'];
$homephone=$_POST['homephone'];
$cellphone=$_POST['cellphone'];
$database = "user_info";
$email=$_POST['email'];
// Create connection
$conn = mysql_connect('<server_name>', '<username>', '<password>');
if (!$conn) { 
    die('Could not connect: ' . mysql_error()); 
} 
 

//select database
mysql_select_db($database,$conn);
if(!mysql_select_db($database,$conn))
        die("Couldn't find ".$database);
 


//Insert the values to the database
if(!($result = mysql_query("INSERT INTO user (FirstName, LastName, Email, home_address, home_phone, cell_phone)
VALUES ('$firstname', '$lastname', '$email', '$address', '$homephone', '$cellphone')",$conn))){
    print_r("Couldn't execute");    
    die(mysql_error());
}



//Close connection
mysql_close($conn);

header("Refresh:0 ; url=http://www.yospartans.com/profile.php");
?>