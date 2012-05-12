<?
require '../includes/dbconnect.inc.php';
    if(isset($_POST['id']))
	{
		$id = mysql_real_escape_string($_POST['id']);
		
?>
	<img src="http://mediaget.info/images/featured_image_tv_show_original/<? echo $id; ?>.jpg" width="389px"></img>
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
				echo '<h3><a href="#">Season '.$value.'</a></h3>';
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
			
			
		}
			echo '</div><link type="text/css" href="css/box.css" rel="stylesheet" /><script type="text/javascript" src="js/box.js"></script>';
		echo '<script>
		$(document).ready(function() {
	$("a.login-window").click(function() {
				var epi_id = $(this).attr("id");
				$.post(\'http://mediaget.info/ajax/process_download.php\', {\'id\': epi_id}, function(data) {
		$("#login-box").html(data);
	});
				
});
    });
		
		$(function() {
				$( "#seasons" ).accordion({
					active: false,
					collapsible: true,
					autoHeight: false

				});
				});

		$("a.login-window").click(function() {
				var epi_id = $(this).attr("id");
				$.post(\'http://mediaget.info/ajax/episode_download_counter.php\', {\'id\': epi_id});
});
				</script>
		';
echo '
<div id="login-box" class="login-popup">
        
</div>';
	}
?>