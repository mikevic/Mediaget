<?php
require 'includes/dbconnect.inc.php'; 
	if(isset($_GET['id']))
	{
		if(!empty($_GET['id']))
		{
			$id = mysql_real_escape_string($_GET['id']);
			$query = "SELECT * FROM episodes WHERE episode_id='$id'";
			$result_query = mysql_query($query);
			while($watch_now = mysql_fetch_assoc($result_query))
				{
					echo $watch_now['embed_code'];
				}
		}
	}
	
?>