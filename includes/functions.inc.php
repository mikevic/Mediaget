<?php

/**
 * @author MWH Team
 * @copyright 2011
 */



function checkEmail($str)
{
	return preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/", $str);
}

 
 function encrypt($pass)
{
    return md5($pass);
}

function current_file()
{
    $current_file = $_SERVER['SCRIPT_NAME'];
    return $current_file;
}

function loggedin()
{
    if(isset($_SESSION['id']))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function check_admin()
{
    if(isset($_SESSION['id']) && isset($_SESSION['level']))
    {
        if($_SESSION['level'] == 10)
		{
		return true;
		}
		else
		{
		return false;
		}
    }
    else
    {
        return false;
    }
}

function check_user()
{
	if(isset($_SESSION['id']))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function referrer()
{
    $http_referrer = $_SERVER['HTTP_REFERER'];
    return $http_referrer;
}

function check_mobile_num()
{
	$id = $_SESSION['id'];
	$query = "SELECT mobile_no FROM members WHERE id='$id'";
	$query_result = mysql_query($query);
	while($user_data = mysql_fetch_assoc($query_result))
	{
		$mobile_num = $user_data['mobile_no'];
	}
	if(empty($mobile_num))
	{
		return false;
	}
	else
	{
		return true;
	}
}
function filecheck($url)
{
$pos = strrpos($url, 'hotfile.com');
}

function movie_does_not_exist($movie_name)
{
	$query = "SELECT * FROM movies WHERE movie_name='$movie_name'";
	$query_result = mysql_query($query);
	if(mysql_num_rows($query_result) == 0)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function user_id()
{
	$user_id = $_SESSION['id'];
	return $user_id;
}

function subscribe_instant($show_id, $season_id, $episode_id)
{

	$query = "SELECT * FROM tv_shows_list WHERE tv_show_id='$show_id'";
	$query_result = mysql_query($query);
	while($show_data = mysql_fetch_assoc($query_result))
	{
		$show_name = $show_data['tv_show_name'];
	}
	$query1 = "SELECT * FROM subscriptions WHERE tv_show_id='$show_id' AND frequency='1'";
	$query_result1 = mysql_query($query1);
	while($sub_data = mysql_fetch_assoc($query_result1))
	{
		$user_id = $sub_data['user_id'];
		$mobile_sub = $sub_data['mobile'];
		$mail_sub = $sub_data['mail'];
		$query2 = "SELECT * FROM members WHERE id='$user_id'";
		$query_result2 = mysql_query($query2);
		while($user_data = mysql_fetch_assoc($query_result2))
		{
			$email = $user_data['email'];
			$mobile = $user_data['mobile_no'];
			if($mail_sub == 1)
			{
				$to = $email;
				$subject = "Mediaget Subscription";
				$mail_message = "Hello, ".$show_name." Season ".$season_id." Episode ".$episode_id.' has been uploaded. - Regards, Mediaget';
				$from = "subscriptions@mediaget.info";
				$headers = "From:" . $from;
				@mail($to,$subject,$mail_message,$headers);
			}
			if($mobile_sub == 1)
			{
				$message = $show_name." S".$season_id." E".$episode_id." has been added - Mediaget";
				$cont=file_get_contents("http://alfasms.alfredfrancis.in/receive/index.php?uname=9884444871&pass=Federation123&to=$mobile&mess=$messages");
				
			}
			
					
		}
		
	}
	
}

function check_filehost_name($link)
{
	$mediafire = 'mediafire';
	$embedupload = 'embedupload';
	$fileserve = 'fileserve';
	$bayfiles = 'bayfiles';
	$rapidshare = 'rapidshare';
	$uploadedto = 'uploaded.to';
	$wupload = 'wupload';
	$filefactory = 'filefactory';
	$fichier = '1fichier';
	$ulto = 'ul.to';
	$rapidgator = 'rapidgator';
	$oron = 'oron';
	$jumbofiles = 'jumbofiles';
	$mediafire_pos = strpos($link, $mediafire);
	if(strpos($link, $mediafire))
	{
		return 'mediafire';
	}
	else if(strpos($link, $embedupload))
	{
		return 'embedupload';
	}
	else if(strpos($link, $fileserve))
	{
		return 'fileserve';
	}
	else if(strpos($link, $bayfiles))
	{
		return 'bayfiles';
	}
	else if(strpos($link, $rapidshare))
	{
		return 'rapidshare';
	}
	else if(strpos($link, $uploadedto))
	{
		return 'uploadedto';
	}
	else if(strpos($link, $wupload))
	{
		return 'wupload';
	}
	else if(strpos($link, $filefactory))
	{
		return 'filefactory';
	}
	else if(strpos($link, $fichier))
	{
		return '1fichier';
	}
	else if(strpos($link, $ulto))
	{
		return 'uploadedto';
	}
	else if(strpos($link, $rapidgator))
	{
		return 'rapidgator';
	}
	else if(strpos($link, $oron))
	{
		return 'oron';
	}
	else if(strpos($link, $jumbofiles))
	{
		return 'jumbofiles';
	}
}


?>