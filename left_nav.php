<?php
require 'includes/dbconnect.inc.php';
$query = "SELECT episode_id FROM episodes ORDER BY episode_id DESC LIMIT 10";
$result_query = mysql_query($query);
?>
<div id="latest_stuff">
 <ul>
		<li><a href="#latest_stuff-1">TV Shows</a></li>
		<li><a href="#latest_stuff-2">Movies</a></li>
</ul>
<div id="latest_stuff-1">
<?
while($latest_episodes = mysql_fetch_assoc($result_query))
{
	$epi = $latest_episodes['episode_id'];
	$query1 = "SELECT * FROM episodes WHERE episode_id='$epi'";
	$result_query1 = mysql_query($query1);
	while($epi_details = mysql_fetch_assoc($result_query1))
	{
		$show_id = $epi_details['show_id'];
		$query2 = "SELECT * FROM tv_shows_list WHERE tv_show_id='$show_id'";
		$result_query2 = mysql_query($query2);
		while($show_details = mysql_fetch_assoc($result_query2))
		{
			echo '<b>'.$show_details['tv_show_name'].'</b><br />';
			echo '<a class="login-window" href="#login-box" id="'.$epi_details['episode_id'].'">Season '.$epi_details['season_num'].' Episode '.$epi_details['episode_num'].'</a><br />';
			
		}
		
	}
	
}


?>
</div>
<div id="latest_stuff-2">
Search for movies on the right! 
</div>
</div>
<?
$query2 = "SELECT SUM(downloads) from episodes";
$result_query2 = mysql_query($query2);
while($download_details = mysql_fetch_assoc($result_query2))
{
	$tv_show_downloads = $download_details['SUM(downloads)'];
}
$query5 = "SELECT SUM(downloads) from movies";
$result_query5 = mysql_query($query5);
while($download_details = mysql_fetch_assoc($result_query5))
{
	$movie_downloads = $download_details['SUM(downloads)'];
}
$total_downloads = $tv_show_downloads + $movie_downloads;
echo '<b>Total Site-wide Downloads : '.$total_downloads.'</b><br />';
$query3 = "SELECT COUNT(*) FROM episodes";
$result_query3 = mysql_query($query3);
while($episode_links = mysql_fetch_assoc($result_query3))
{
	echo '<b>Number of TV Show Episodes : '.$episode_links['COUNT(*)'].'</b><br />';
}
$query4 = "SELECT COUNT(*) FROM movies";
$result_query4 = mysql_query($query4);
while($movie_links = mysql_fetch_assoc($result_query4))
{
	echo '<b>Number of Movies : '.$movie_links['COUNT(*)'].'</b><br />';
}
?>
<div id="login-box" class="login-popup">
        
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/box.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<link type="text/css" href="css/box.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script>
$(document).ready(function() {
	$("a.login-window").click(function() {
				var epi_id = $(this).attr("id");
				$.post('../ajax/process_download.php', {'id': epi_id}, function(data) {
		$("#login-box").html(data);
	});
				
});
    });
$(function() {
		$( "#latest_stuff" ).tabs();
	});
	
$("a.login-window").click(function() {
				var epi_id = $(this).attr("id");
				$.post('../ajax/episode_download_counter.php', {'id': epi_id});

});
</script>