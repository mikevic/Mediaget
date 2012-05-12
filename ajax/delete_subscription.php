<?php
session_name('mediagetLogin');
// Starting the session

session_set_cookie_params(2*7*24*60*60);
// Making the cookie live for 2 weeks

session_start();
require '../includes/dbconnect.inc.php';
require '../includes/functions.inc.php';
$sub_id = $_POST['id'];
$query = "DELETE from subscriptions WHERE subscription_id='$sub_id'";
mysql_query($query);
?>