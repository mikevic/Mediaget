<?php
//Alfasms API is a free sms api to send sms from way2sms
//using PHP 
//Author:Alfred francis
//Email:alfredputhurh@gmail.com
//app page http://alfredfrancis.in/alfasms-api/
//work on any server which supports PHP 
//DONT EDIT THIS CODE
function alfaerror($errno, $errstr)//error handler
 {
	echo "<b>Error:- Message cant sent,train again later !<br>-server may be busy !";
 }

  set_error_handler("alfaerror");//setting error handler

function alfasms($mobno,$message)
{
	include("alfa.config.php");
	$uname = $username;
	$pass = $password;
	$to = $mobno;
	$mess = rawurlencode($message);
	$cont=file_get_contents("http://alfasms.alfredfrancis.in/receive/index.php?uname=$uname&pass=$pass&to=$to&mess=$mess");
	if(trim($cont)=="error")
	{
	echo "<center><b><font color=red>Wrong username/ password,Please check alfa.config.php file</font></b></center>";
	}
	else
	{
	return true;
	}
	
}
?>