<?php



$database = "login_info";
$error='Not Runnable'; // Variable To Store Error Message

if (!empty($_POST['username']) || !empty($_POST['password'])) {

// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

$conn = mysql_connect('<server_name>', '<username>', '<password>');

if (!$conn) { 
    die('Could not connect: ' . mysql_error()); 
} 
print_r('Connected successfully <br/>'); 

mysql_select_db($database,$conn);
if(!mysql_select_db($database,$conn))
        die("Couldn't find ".$database);
// SQL query to fetch information of registerd users and finds user match.

$query = mysql_query("SELECT * FROM login WHERE username='$username' AND password='$password'  LIMIT 1", $conn);
$row = mysql_fetch_assoc($query);
echo mysql_num_fields($row);
if(mysql_num_fields($row) == 1)
{
    echo "inside";
    //$_SESSION['login_user']=$username;
    header("Refresh:0 ; url=http://yospartans.com/profile.php");
    exit();
}    
else
    {
        print_r("Couldn't execute");    
        die(mysql_error());
    }
mysql_close($connection); // Closing Connection
}


?>




 


 

