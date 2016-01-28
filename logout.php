<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: http://yospartans.com/index.php"); // Redirecting To Home Page
}
?>