<?php

$database="user_info";

$conn = mysql_connect('<server_name>', '<username>', '<password>');
if (!$conn) { 
    die('Could not connect: ' .mysql_error()); 
} 
//print_r('Connected successfully <br/>'); 

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
    ECHO "<h4>"."YoSpartans Users Are: "."</h4>"."<BR/>";
    while($row = mysql_fetch_assoc($query))
    {
        echo "<br/>" . $row['FirstName']." ". $row['LastName']."<br/>";
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
    print_r("<br/>");
    }
    
//close connection
mysql_close($conn);
 
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'http://cbigsky.com/list_1.php');
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

echo "<h4>"."User of Remote Website CBIGSKY :"."</h4>";
$content = curl_exec($ch);
echo $content;
curl_close($ch); 

$ch1 = curl_init();
curl_setopt( $ch1, CURLOPT_URL, 'http://yogiopticans.com/list.php');
curl_setopt( $ch1, CURLOPT_RETURNTRANSFER, 1);
echo "<br/>";;
echo "<h4>"."User of Remote Website Yogi Opticians :"."</h4>";
$content = curl_exec($ch1);
echo $content;
curl_close($ch1);

?>