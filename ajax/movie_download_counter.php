<?php
require '../includes/dbconnect.inc.php';
	if(isset($_POST['id']))
	{
		$id = mysql_real_escape_string($_POST['id']);
		$query = "SELECT * FROM movies WHERE movie_id='$id'";
		$result_query = mysql_query($query);
		while($download = mysql_fetch_assoc($result_query))
				{
					$downloads = $download['downloads'];
				}
		$downloads = $downloads+1;
		$query1 = "UPDATE movies SET downloads='$downloads' WHERE movie_id='$id'";
		mysql_query($query1);
	}	
?>