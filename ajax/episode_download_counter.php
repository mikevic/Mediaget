<?php
require '../includes/dbconnect.inc.php';
	if(isset($_POST['id']))
	{
		$id = mysql_real_escape_string($_POST['id']);
		$query = "SELECT * FROM episodes WHERE episode_id='$id'";
		$result_query = mysql_query($query);
		while($download = mysql_fetch_assoc($result_query))
				{
					$downloads = $download['downloads'];
				}
		$downloads = $downloads+1;
		$query1 = "UPDATE episodes SET downloads='$downloads' WHERE episode_id='$id'";
		mysql_query($query1);
	}	
?>