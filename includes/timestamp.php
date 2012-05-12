<?php
require 'dbconnect.inc.php';
require 'functions.inc.php';
$today = strtotime("now");
$yesterday = strtotime("-1 day");
$query = "SELECT * FROM episodes WHERE date_added BETWEEN FROM_UNIXTIME($yesterday) AND FROM_UNIXTIME($today) AND show_id='11'";
$query_result = mysql_query($query);
	while($show_data = mysql_fetch_assoc($query_result))
	{
		echo $show_name = $show_data['link1'];
	}
?>