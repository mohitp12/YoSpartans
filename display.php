<?php

$database="user_info";

$conn = mysql_connect('<server_name>', '<username>', '<password>');
if (!$conn) { 
    die('Could not connect: ' .mysql_error()); 
} 
print_r('Connected successfully <br/>'); 

//select database
mysql_select_db($database,$conn);
if(!mysql_select_db($database,$conn)){
        die("Couldn't find ".$database);
}

$query =  mysql_query("SELECT FirstName,LastName FROM user",$conn);

//print_r($query);

$row = mysql_fetch_assoc($query);
 

if(!empty($row))
{
    ECHO "USERS ARE: "."<BR/>";
    while($row = mysql_fetch_assoc($query))
    {
        echo "<br/>" . $row['FirstName']." ". $row['LastName']."<br/><br/>";
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