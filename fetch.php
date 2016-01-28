<?php


$database="user_info";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$address=$_POST['address'];
$homephone=$_POST['homephone'];
$cellphone=$_POST['cellphone'];
$email=$_POST['email'];
//extract($_POST);
//connect databse
$conn = mysql_connect('<server_name>', '<username>', '<password>');


print_r($address);

if (!$conn) { 
    die('Could not connect: ' .mysql_error()); 
} 
print_r('Connected successfully <br/>'); 

//select database
mysql_select_db($database,$conn);
if(!mysql_select_db($database,$conn)){
        die("Couldn't find ".$database);
}

$query =  mysql_query("SELECT * FROM user WHERE  FirstName = '$firstname'
                                                  OR LastName = '$lastname' 
                                                  OR Email = '$email'  
                                                  OR home_address = '$address'
                                                  OR cell_phone='$cellphone'",$conn);
//$row = mysql_fetch_assoc($query);

//print_r($row);
//execute query    
if(!empty($query))
{
    while($row = mysql_fetch_assoc($query))
    {
        echo "<br/>Firstname: " . $row['FirstName']. "<br/> Lastname: " . $row['LastName']. "<br/>Email: " . $row['Email']. "<br/>Home Address: " . $row['home_address']."</br>Home Phone: " .$row['home_phone']."<br/>Cell Phone:  " . $row['cell_phone']. "<br/><br/>";
    
        //exit;
    }  
    
}
    
else
    {
        print_r("Couldn't execute");    
        die(mysql_error());
    }
 
if (empty($row)) {
    // output data of each row
    print_r("Return Back to Search more Users");
    }
    
//close connection
mysql_close($conn);
?>
         