<?php



$db = new mysqli('<server_name>', '<username>', '<password>', '<db_name>');

if(!$db){
    die('Could not connect: ' . mysql_error());
}



if (isset($_GET['service'], $_GET['rating'])){
   
    $service = (int)$_GET['service'];
    $rating = (int)$_GET['rating'];
    
    $exist = $db->query("SELECT id FROM services WHERE id = {$service}")->num_rows ? true : false;
    
    if($exist){
        $db->query("INSERT INTO service_rating (service_id, rating_value) VALUES ({$service},{$rating})");
    }
    
    header('Location: infoPage.php?id='.$service);
}

?>
