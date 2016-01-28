<?php 
extract($_POST);
$database = "cmpe272";
/* @var $firstname type */
if ($passwordsignup == $passwordsignup_confirm)
{
// Create connection
$conn = mysql_connect('<server_name>', '<username>', '<password>');
if (!$conn) { 
    die('Could not connect: ' . mysql_error()); 
} 
//print_r('Connected successfully <br/>'); 

//select database
mysql_select_db($database,$conn);
if(!mysql_select_db($database,$conn))
        die("Couldn't find ".$database);
 
//print_r($_POST);

//Insert the values to the database
if(!($result = mysql_query("INSERT INTO user (username, emailaddr, password)
VALUES ('$usernamesignup', '$emailsignup', '$passwordsignup')",$conn))){
    print_r("Couldn't execute");    
    die(mysql_error());
}

//print_r("Query Inserted-->Check Database");

//Close connection
mysql_close($conn);
header('Refresh:0 ; url=http://yospartans.com/login.php');
}
else
{
    echo 'Passwords do not match';
}
?>