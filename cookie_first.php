<?php
session_start();
extract($_POST);

if(array_key_exists('recentviews', $_COOKIE)) {
            $cookie = $_COOKIE['recentviews'];
            $cookie = unserialize($cookie);
} else {
    $cookie = array();
}

// add the value to the array and serialize
$cookie[] = $page;
$cookie = serialize($cookie);

// save the cookie
setcookie('recentviews', $cookie, time()+3600*24*30,'/');

$track = $_COOKIE['recentviews'];
$_SESSION["track_products"]=$track;

$db = new mysqli('<server_name>', '<username>', '<password>', '<database_name>');

if(!$db){
    die('Could not connect: ' . mysql_error());
}

$query = $db->query("SELECT * FROM services WHERE id = {$page}")->fetch_object();


header("Refresh:0 ; url=infoPage.php?id=".$query->id);

?>

