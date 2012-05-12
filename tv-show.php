<?

require 'login_slider.php';
require 'header.php';
    if(isset($_GET['id']))
	{
		$id = mysql_real_escape_string($_GET['id']);
?>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/ga.js"></script>
<link type="text/css" href="css/dot-luv/jquery-ui.css" rel="stylesheet" />
<link type="text/css" href="css/tv-show.css" rel="stylesheet" />
<style>
#body_data {
display : none;
}
</style>
<script>
$(document).ready(function() {
	$("#body_data").css('display','inherit');
    })
</script>
<div id="shadow">
<div id="leftnav">
<?
require 'leftnav.php';
?>
</div>
<?
	$query10 = "SELECT * FROM tv_shows_list WHERE tv_show_id='$id'";
	$result_query10 = mysql_query($query10);
	while($data = mysql_fetch_assoc($result_query10))
			{
				?>
				<title><? echo $data['tv_show_name']; ?> | Mediaget</title>
				<div id="body_data">
				<div id="info">
				<h3><a href="#">About <? echo $data['tv_show_name']; ?></a></h3>
				<div>
				<b>Year</b> : <? echo $data['year'] ; ?><br />
				<b>Rated</b> : <? echo $data['rated']; ?><br />
				<b>Genre</b> : <? echo $data['genre']; ?><br />
				<b>Actors</b> : <? echo $data['actors']; ?><br />
				<b>Plot</b> : <? echo $data['plot']; ?><br />
				<b>Rating</b> : <? echo $data['rating']; ?><br />
				</div>
				<?
				$show_name = $data['tv_show_name'];
			}
	?>
	</div>
	<div id="news_show">
	<h3><a href="#">News related to <? echo $show_name; ?></a></h3>
	<div>
	<?
	$query11 = "SELECT * FROM tv_news WHERE tv_show_id='$id' ORDER BY tv_news_id DESC LIMIT 0,5";
	$result_query11 = mysql_query($query11);
	if(mysql_num_rows($result_query11) == 0)
	{
			echo 'No news articles yet.';
	}
	else
	{
	while($news = mysql_fetch_assoc($result_query11))
			{
			?>
				
				<? echo $news['news_desc']; ?> <?echo '<a href="'.$news['read_more_link'].'">Read More</a><br />'; ?>
				
			<?
			}
	}
?>
	</div>
	</div>
<?
		$query = "SELECT * FROM episodes WHERE show_id='$id'";
		$result_query = mysql_query($query);
		if(mysql_num_rows($result_query) == 0)
		{
			echo 'Sorry, no episodes here!';
		}
		else
		{
			echo '<div id ="seasons">';

			$query1 = "SELECT DISTINCT season_num FROM episodes WHERE show_id='$id' ORDER BY season_num ASC";
			$season = array();
			$result_query1 = mysql_query($query1);
			while($seasons = mysql_fetch_assoc($result_query1))
			{
				array_push($season, $seasons['season_num']);
				
			}
			foreach($season as $value)
			{
				echo '<h3><a href="#">Download Season '.$value.'</a></h3>';
				$query2 = "SELECT * FROM episodes WHERE show_id='$id' AND season_num='$value' ORDER BY episode_num ASC";
				$result_query2 = mysql_query($query2);
				echo '<div>';
				while($season_episodes = mysql_fetch_assoc($result_query2))
				{
					echo '<a class="login-window" href="#login-box" id="'.$season_episodes['episode_id'].'">Episode '.$season_episodes['episode_num'].'</a>';
					echo '<br />';
					echo 'Downloads : '.$season_episodes['downloads'];
					echo '<br />';
					
				}
				echo '</div>';

			}
			
			
		}	echo '</div>';echo '</div>';
		
?>
<div id="body_picture">
<img src="http://mediaget.info/images/featured_image_tv_show_original/<? echo $id ?>.jpg" width="518px">
</div>
<div id="footer">
<a href="dmca.html">DMCA Takedown</a>
</div>
<?	
echo '</div>';

		echo '<script>
		$(function() {
				$( "#seasons" ).accordion({
					active: false,
					collapsible: true,
					autoHeight: false

				});
				});
		
		$(function() {
				$( "#info" ).accordion({
					autoHeight: false
				});
				});
				
		$(function() {
				$( "#news_show" ).accordion({
					autoHeight: false
				});
				});
		
		$("a.login-window").click(function() {
				var epi_id = $(this).attr("id");
				$.post(\'../ajax/episode_download_counter.php\', {\'id\': epi_id}, function(data) {
				$("#episodes").html(data);
	});
});
				</script>
		';
		
	echo '</div><link type="text/css" href="css/box.css" rel="stylesheet" /><script type="text/javascript" src="js/box.js"></script>';
		echo '<script>
		$(document).ready(function() {
	$("a.login-window").click(function() {
				var epi_id = $(this).attr("id");
				$.post(\'http://mediaget.info/ajax/process_download.php\', {\'id\': epi_id}, function(data) {
		$("#login-box").html(data);
	});
				
});
    }); </script>';
	echo '
<div id="login-box" class="login-popup">
        
</div>';
	}

?>
</div>