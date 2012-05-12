<?php
ob_start();
require 'login_slider.php';
if(check_admin())
{
if(isset($_POST['series_name']))
{
	$series_name = $_POST['series_name'];
	if(!empty($_POST['series_name']))
	{
		$query = "INSERT into tv_shows_list (tv_show_name) VALUES ('$series_name')";
		if($query_run=mysql_query($query))
					{
					  echo 'Series added to database.';     
						
					}
					else
					{
						echo mysql_error();
					}
	}
	$query1 = "SELECT MAX(tv_show_id) AS current_tv_id FROM tv_shows_list";
		if($query_run1=mysql_query($query1))
					{
					   $current_tv_id_array = mysql_fetch_assoc(mysql_query($query1));
					   $current_tv_id = $current_tv_id_array['current_tv_id'];
					}
					else
					{
						echo mysql_error();
						echo 'Problem, its time to call Mike!';
					}
	
	header('Location:update_tv.php?i='.$current_tv_id);
}
?>
<br />
<br />
<br />
<br />
<br />
<br />
<form action="add_series.php" method="POST">
Series Name : <input type="text" name="series_name" /><br />

<input type="submit" value="Add to database!">
</form>
<?
}
?>