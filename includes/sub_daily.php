<?php 
require 'dbconnect.inc.php';
include("../sms/alfa.sms.php");
$today = strtotime("now");
$yesterday = strtotime("-1 day");
$query = "SELECT * from members";
$query_result = mysql_query($query);
	while($user_data = mysql_fetch_assoc($query_result))
	{
		$user_id = $user_data['id'];
		$email = $user_data['email'];
		$mobile_no = $user_data['mobile_no'];
		$mail_array = array();
		$message_array = array();
		$query2 = "SELECT * from subscriptions WHERE user_id='$user_id'";
		$query_result2 = mysql_query($query2);
		while($sub_data = mysql_fetch_assoc($query_result2))
		{
			$show_subscribed_to = $sub_data['tv_show_id'];
			$query5 = "SELECT * FROM tv_shows_list WHERE tv_show_id='$show_subscribed_to'";
			$query_result5 = mysql_query($query5);
			while($show_data = mysql_fetch_assoc($query_result5))
			{
				$show_name = $show_data['tv_show_name'];
			}
			$query4 = "SELECT * FROM subscriptions WHERE tv_show_id='$show_subscribed_to' AND frequency='2'";
			$query_result4 = mysql_query($query4);
			while($mail_data = mysql_fetch_assoc($query_result4))
			{
				$mail_choice = $mail_data['mail'];
				$mobile_choice = $mail_data['mobile'];
			}
			$query3 = "SELECT * FROM episodes WHERE date_added BETWEEN FROM_UNIXTIME($yesterday) AND FROM_UNIXTIME($today) AND show_id='$show_subscribed_to'";
			$query_result3 = mysql_query($query3);
			if(mysql_num_rows($query_result3) != 0)
			{
				if($mail_choice == 1)
				{
					array_push($mail_array, $show_name);
				}
				if($mobile_choice == 1)
				{
					array_push($message_array, $show_name);
				}
			}
			
		}
		if(!empty($mail_array))
		{
			$to = $email;
			$subject = "Mediaget Subscription Update";
			$mail_message = "Hello, there are new episodes to the shows : ";
			foreach($mail_array as $show_mail)
			{
				$mail_message = $mail_message.$show_mail.', ';
			}
			$from = "subscriptions@mediaget.info";
			$headers = "From:" . $from;
			@mail($to,$subject,$mail_message,$headers);
		}
		if(!empty($message_array))
		{
			$message = "New episodes for : ";
			foreach($message_array as $show_message)
			{
				$message = $message.$show_message.', ';
				alfasms($mobile_no,$message);
			}
			
		}
	}

?>