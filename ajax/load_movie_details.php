<?
require '../includes/dbconnect.inc.php';
    if(isset($_POST['id']))
	{
		$id = mysql_real_escape_string($_POST['id']);
		$query = "SELECT * FROM movie_links WHERE movie_id='$id' ORDER BY link_num ASC";
		$query1 = "SELECT * FROM movies WHERE movie_id='$id'";
		$result_query = mysql_query($query);
		$result_query1 = mysql_query($query1);
		while($movie_name = mysql_fetch_assoc($result_query1))
		{
			$movie_name_name = $movie_name['movie_name'];
			$year = $movie_name['year'];
			$rated = $movie_name['rated'];
			$released = $movie_name['released'];
			$genre = $movie_name['genre'];
			$director = $movie_name['direector'];
			$actors = $movie_name['actors'];
			$plot = $movie_name['plot'];
			$rating = $movie_name['rating'];
			$torrent = $movie_name['torrent'];
		}
		if(mysql_num_rows($result_query) == 0)
		{
			echo 'Sorry, there are no download links available for this movie at the moment!';
		}
		else
		{
			?>
			
			<img src="../images/featured_image_movie/<?echo $id;?>.jpg">
			<div id="movie_details">
			<h3><a href="#">Download <? echo $movie_name_name ?></a></h3>
			<div>
				Click on the "More Info" link to view download links!
			</div>
			<h3><a href="#">About <? echo $movie_name_name ?></a></h3>
			<div>
			<b>Year Released </b>: <? echo $year ?> <br />
			<b>Rated </b>: <? echo $rated ?><br />
			<b>Date Released </b>: <? echo $released ?><br />
			<b>Genre </b>: <? echo $genre ?><br />
			<b>Director </b>: <? echo $director ?><br />
			<b>Actors </b>: <? echo $actors ?><br />
			<b>Plot </b>: <? echo $plot ?><br />
			<b>Rating </b>: <? echo $rating ?><br />
			Information here is from IMDB. It is updated once every 48 hrs.
				<?
					
				?>
			</div>
			</div>
			<a class="a_demo_four" href="http://mediaget.info/movie.php?id=<? echo $id; ?>" width="300px">More Info/Trailer</a>
			<head>
			<title><? echo $movie_name_name; ?> | Mediaget</title>
			</head>
			<?
		}

	echo '</div><link type="text/css" href="css/box.css" rel="stylesheet" /><script type="text/javascript" src="js/box.js"></script>';
echo '<script>

$(document).ready(function() {
	$("a.login-window").click(function() {
				var epi_id = $(this).attr("id");
				$.post(\'http://mediaget.info/ajax/process_movie_download.php\', {\'id\': epi_id}, function(data) {
		$("#login-box").html(data);
	});
				
});
    });

		$(function() {
				$( "#movie_details" ).accordion({
					active: true,
					collapsible: true,
					autoHeight: false

				});
				});
				

</script>
				
				';
				
}
?>