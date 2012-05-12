<?php
session_name('mediagetLogin');
// Starting the session

session_set_cookie_params(2*7*24*60*60);
// Making the cookie live for 2 weeks

session_start();
require 'dbconnect.inc.php';
require 'functions.inc.php';
$show_id = $_POST['show_name'];
$query1 = "SELECT * FROM tv_shows_list WHERE tv_show_id='$show_id'";
$result_query1 = mysql_query($query1);
while($show = mysql_fetch_assoc($result_query1))
{
	$show_name_unformatted = $show[tv_show_name];
}
$show_name = str_replace(' ', '+', $show_name_unformatted);
$frequency = $_POST['frequency'];
if(isset($_POST['mail']))
{
	$mail = 1;
}
else
{
	$mail = 0;
}
if(isset($_POST['mobile']))
{
	$mobile = 1;
}
else
{
	$mobile=0;
}
$user_id = $_SESSION['id'];
$query = "INSERT into subscriptions (user_id, tv_show_id, frequency, mail, mobile) VALUES ('$user_id', '$show_id', '$frequency', '$mail', '$mobile')";
if($query_run=mysql_query($query))
					{
					  echo "You have successfully subscribed to $show_name_unformatted";     
						
					} 
					else
					{
						echo mysql_error();
					}
$query2 = "SELECT * FROM members WHERE id='$user_id'";
$result_query2 = mysql_query($query2);
while($member_data = mysql_fetch_assoc($result_query2))
{
	$email = $member_data['email'];
	$mobile_number = $member_data['mobile_no'];
}
if($mail == 1)
{
	$to = $email;
	$subject = "Mediaget Subscription";
	$message = "Hello! You have successfully been subscribed to $show_name_unformatted.";
	$from = "subscriptions@mediaget.info";
	$headers = "From:" . $from;
	@mail($to,$subject,$message,$headers);
}
if($mobile == 1)
{
	$message = "You have successfully subscribed to $show_name_unformatted";
	include("../sms/alfa.sms.php");
	alfasms($mobile_number,$message);
	
}

?>