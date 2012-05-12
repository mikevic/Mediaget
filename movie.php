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
<script type="text/javascript" src="js/box.js"></script>
<link type="text/css" href="css/box.css" rel="stylesheet" />
<link type="text/css" href="css/dot-luv/jquery-ui.css" rel="stylesheet" />
<link type="text/css" href="css/movie.css" rel="stylesheet" />
<link type="text/css" href="css/jquery.jgrowl.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.jgrowl.js"></script>
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
<div id="container">
<div id="leftnav">
<?
require 'leftnav.php';
?>
</div>
<div id="body_data">
<?
	$query2 = "SELECT * FROM movies WHERE movie_id='$id'";
	$result_query2 = mysql_query($query2);
	while($data = mysql_fetch_assoc($result_query2))
	{
		$video_id = $data['video_id'];
	}
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
			<img src="images/featured_image_movie/<?echo $id;?>.jpg">
			<div id="movie_download">
			<h3><a href="#">Download <? echo $movie_name_name ?></a></h3>
			<div>
			<?
			echo '<a class="login-window" href="#login-box" id="'.$id.'">Download Links</a>';
			?>
			</div>
			</div>
			<head>
			<title><? echo $movie_name_name; ?> | Mediaget</title>
			</head>
		<?
		}
$query10 = "SELECT * FROM movies WHERE movie_id='$id'";
$result_query10 = mysql_query($query10);
while($movie_name = mysql_fetch_assoc($result_query10))
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
?>

</div>
<div id="body_picture">
<iframe width="649" height="360" src="http://www.youtube.com/embed/<? echo $video_id; ?>" frameborder="0" allowfullscreen></iframe>
			
			<div id="movie_details">
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
			</div>
			</div>
</div>
</div>
<div id="login-box" class="login-popup">
        
</div>
<script>
$(document).ready(function() {
	$.jGrowl("Solution: Simply click outside the box to close it, then click on the download link to reload the box. This should solve your problem", { header: 'Download links going off-screen?', sticky: true });
	$("a.login-window").click(function() {
				var epi_id = $(this).attr("id");
				$.post('../ajax/process_movie_download.php', {'id': epi_id}, function(data) {
		$("#login-box").html(data);
	});
				
});
    $("iframe").each(function(){
        var ifr_source = $(this).attr('src');
        var wmode = "wmode=transparent";
        if(ifr_source.indexOf('?') != -1) {
            var getQString = ifr_source.split('?');
            var oldString = getQString[1];
            var newString = getQString[0];
            $(this).attr('src',newString+'?'+wmode+'&'+oldString);
        }
        else $(this).attr('src',ifr_source+'?'+wmode);
    });
	
	$("a.login-window").click(function() {
				var epi_id = $(this).attr("id");
				$.post('http://mediaget.info/ajax/movie_download_counter.php', {'id': epi_id});
});

    });
	
</script>
<?
echo '<script>
		$(function() {
				$( "#movie_download" ).accordion({

					autoHeight: false

				});
				});
		$(function() {
				$( "#movie_details" ).accordion({

					autoHeight: false

				});
				});		
		</script>';
}
?>