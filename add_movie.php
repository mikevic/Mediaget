<?php
set_time_limit(300);
require 'login_slider.php';
if(check_admin())
{
if(isset($_POST['movie_name']) && isset($_POST['link1']))
{
	$movie_name = $_POST['movie_name'];
	$link1 = $_POST['link1'];
	$link1_2 = $_POST['link1_2'];
	$link1_3 = $_POST['link1_3'];
	$link1_4 = $_POST['link1_4'];
	$link1_5 = $_POST['link1_5'];
	$link1_6 = $_POST['link1_6'];
	$link1_7 = $_POST['link1_7'];
	$link1_8 = $_POST['link1_8'];
	if(!empty($movie_name) && !empty($link1) && movie_does_not_exist($movie_name))
	{
		$query = "INSERT into movies (movie_name) VALUES ('$movie_name')";
		if($query_run=mysql_query($query))
					{
					  echo 'Movie name added to database.<br />';     
						
					}
					else
					{
						echo mysql_error();
					}
		$query1 = "SELECT MAX(movie_id) AS current_movie_id FROM movies";
		if($query_run1=mysql_query($query1))
					{
					   $current_movie_id_array = mysql_fetch_assoc(mysql_query($query1));
					   $current_movie_id = $current_movie_id_array['current_movie_id'];
					}
					else
					{
						echo mysql_error();
						echo 'Problem, its time to call Mike!';
					}
		$query2="INSERT into movie_links (movie_id, link_num, link, link2, link3, link4, link5, link6, link7, link8) VALUES ('$current_movie_id', '1', '$link1', '$link1_2', '$link1_3', '$link1_4', '$link1_5', '$link1_6', '$link1_7', '$link1_8')";
		if($query_run1=mysql_query($query2))
					{
					  echo 'Part 1 added to database.<br />';     
						
					}
					else
					{
						echo mysql_error();
					}
		if(isset($_POST['link2']) && !empty($_POST['link2']))
		{
			$link2 = $_POST['link2'];
			$link2_2 = $_POST['link2_2'];
			$link2_3 = $_POST['link2_3'];
			$link2_4 = $_POST['link2_4'];
			$link2_5 = $_POST['link2_5'];
			$link2_6 = $_POST['link2_6'];
			$link2_7 = $_POST['link2_7'];
			$link2_8 = $_POST['link2_8'];
			$query3 = "INSERT into movie_links (movie_id, link_num, link, link2, link3, link4, link5, link6, link7, link8) VALUES ('$current_movie_id', '2', '$link2', '$link2_2', '$link2_3', '$link2_4', '$link2_5', '$link2_6', '$link2_7', '$link2_8')";
			if($query_run2=mysql_query($query3))
					{
					  echo 'Part 2 added to database.<br />';     
						
					}
					else
					{
						echo mysql_error();
					}
		}
		if(isset($_POST['link3']) && !empty($_POST['link3']))
		{
			$link3 = $_POST['link3'];
			$link3_2 = $_POST['link3_2'];
			$link3_3 = $_POST['link3_3'];
			$link3_4 = $_POST['link3_4'];
			$link3_5 = $_POST['link3_5'];
			$link3_6 = $_POST['link3_6'];
			$link3_7 = $_POST['link3_7'];
			$link3_8 = $_POST['link3_8'];
			$query4 = "INSERT into movie_links (movie_id, link_num, link, link2, link3, link4, link5, link6, link7, link8) VALUES ('$current_movie_id', '3', '$link3', '$link3_2', '$link3_3', '$link3_4', '$link3_5', '$link3_6', '$link3_7', '$link3_8')";
			if($query_run3=mysql_query($query4))
					{
					  echo 'Part 3 added to database.<br />';     
						
					}
					else
					{
						echo mysql_error();
					}
		}
		if(isset($_POST['link4']) && !empty($_POST['link4']))
		{
			$link4 = $_POST['link4'];
			$link4_2 = $_POST['link4_2'];
			$link4_3 = $_POST['link4_3'];
			$link4_4 = $_POST['link4_4'];
			$link4_5 = $_POST['link4_5'];
			$link4_6 = $_POST['link4_6'];
			$link4_7 = $_POST['link4_7'];
			$link4_8 = $_POST['link4_8'];
			$query5 = "INSERT into movie_links (movie_id, link_num, link, link2, link3, link4, link5, link6, link7, link8) VALUES ('$current_movie_id', '4', '$link4', '$link4_2', '$link4_3', '$link4_4', '$link4_5', '$link4_6', '$link4_7', '$link4_8')";
			if($query_run4=mysql_query($query5))
					{
					  echo 'Part 4 added to database.<br />';     
						
					}
					else
					{
						echo mysql_error();
					}
		}
		if(isset($_POST['link5']) && !empty($_POST['link5']))
		{
			$link5 = $_POST['link5'];
			$link5_2 = $_POST['link5_2'];
			$link5_3 = $_POST['link5_3'];
			$link5_4 = $_POST['link5_4'];
			$link5_5 = $_POST['link5_5'];
			$link5_6 = $_POST['link5_6'];
			$link5_7 = $_POST['link5_7'];
			$link5_8 = $_POST['link5_8'];
			$query7 = "INSERT into movie_links (movie_id, link_num, link, link2, link3, link4, link5, link6, link7, link8) VALUES ('$current_movie_id', '5', '$link5', '$link5_2', '$link5_3', '$link5_4', '$link5_5', '$link5_6', '$link5_7', '$link5_8')";
			if($query_run6=mysql_query($query7))
					{
					  echo 'Part 5 added to database.<br />';     
						
					}
					else
					{
						echo mysql_error();
					}
		}
		if(isset($_POST['link6']) && !empty($_POST['link6']))
		{
			$link6 = $_POST['link6'];
			$link6_2 = $_POST['link6_2'];
			$link6_3 = $_POST['link6_3'];
			$link6_4 = $_POST['link6_4'];
			$link6_5 = $_POST['link6_5'];
			$link6_6 = $_POST['link6_6'];
			$link6_7 = $_POST['link6_7'];
			$link6_8 = $_POST['link6_8'];
			$query10 = "INSERT into movie_links (movie_id, link_num, link, link2, link3, link4, link5, link6, link7, link8) VALUES ('$current_movie_id', '6', '$link6', '$link6_2', '$link6_3', '$link6_4', '$link6_5', '$link6_6', '$link6_7', '$link6_8')";
			if($query_run10=mysql_query($query10))
					{
					  echo 'Part 6 added to database.<br />';     
						
					}
					else
					{
						echo mysql_error();
					}
		}
		if(isset($_POST['link7']) && !empty($_POST['link7']))
		{
			$link7 = $_POST['link7'];
			$link7_2 = $_POST['link7_2'];
			$link7_3 = $_POST['link7_3'];
			$link7_4 = $_POST['link7_4'];
			$link7_5 = $_POST['link7_5'];
			$link7_6 = $_POST['link7_6'];
			$link7_7 = $_POST['link7_7'];
			$link7_8 = $_POST['link7_8'];
			$query11 = "INSERT into movie_links (movie_id, link_num, link, link2, link3, link4, link5, link6, link7, link8) VALUES ('$current_movie_id', '7', '$link7', '$link7_2', '$link7_3', '$link7_4', '$link7_5', '$link7_6', '$link7_7', '$link7_8')";
			if($query_run11=mysql_query($query11))
					{
					  echo 'Part 7 added to database.<br />';     
						
					}
					else
					{
						echo mysql_error();
					}
		}
		if(isset($_POST['link8']) && !empty($_POST['link8']))
		{
			$link8 = $_POST['link8'];
			$link8_2 = $_POST['link8_2'];
			$link8_3 = $_POST['link8_3'];
			$link8_4 = $_POST['link8_4'];
			$link8_5 = $_POST['link8_5'];
			$link8_6 = $_POST['link8_6'];
			$link8_7 = $_POST['link8_7'];
			$link8_8 = $_POST['link8_8'];
			$query12 = "INSERT into movie_links (movie_id, link_num, link, link2, link3, link4, link5, link6, link7, link8) VALUES ('$current_movie_id', '8', '$link8', '$link8_2', '$link8_3', '$link8_4', '$link8_5', '$link8_6', '$link8_7', '$link8_8')";
			if($query_run12=mysql_query($query12))
					{
					  echo 'Part 8 added to database.<br />';     
						
					}
					else
					{
						echo mysql_error();
					}
		}
		$movie_name_formatted = str_replace(' ', '+', $movie_name);
		$URL = 'http://www.imdbapi.com/?i=&t='.$movie_name_formatted;
		$json   = file_get_contents($URL);
		$result = json_decode($json, TRUE);
		$year = addslashes($result['Year']);
		$rated = addslashes($result['Rated']);
		$released = addslashes($result['Released']);
		$genre = addslashes($result['Genre']);
		$director = addslashes($result['Direector']);
		$actors = addslashes($result['Actors']);
		$plot = addslashes($result['Plot']);
		$rating = addslashes($result['Rating']);
		$query6 = "UPDATE movies SET year='$year', rated='$rated', released='$released', genre='$genre', director='$director', actors='$actors', plot='$plot', rating='$rating' WHERE movie_id='$current_movie_id'";
		if($query_run5=mysql_query($query6))
					{
					  echo 'IMDB Data Added.<br />';     
						
					}
					else
					{
						echo mysql_error();
					}
		$url = $result['Poster'];
		$image = 'images/featured_image_movie_original/'.$current_movie_id.'.jpg';
		file_put_contents($image, file_get_contents($url));
		$size = getimagesize('images/featured_image_movie_original/'.$current_movie_id.'.jpg');
		$width = $size[0];
        $height = $size[1];
		$ratio = $height/$width;
		$new_width = 389;
		$new_height = $new_width*$ratio;
		$img = imagecreatefromjpeg('images/featured_image_movie_original/'.$current_movie_id.'.jpg');
        $img389 = imagecreatetruecolor($new_width, $new_height);
        imagecopyresized($img389, $img,  0, 0, 0, 0, $new_width, $new_height, $width, $height );
        imagejpeg($img389, 'images/featured_image_movie/'.$current_movie_id.'.jpg');
		
		if(isset($_POST['torrent']) && !empty($_POST['torrent']))
		{
			$torrent = $_POST['torrent'];
			$query8 = "UPDATE movies SET torrent='$torrent' WHERE movie_id='$current_movie_id'";
			if($query_run8=mysql_query($query8))
					{
					  echo 'Torrent Data Added.<br />';     
						
					}
					else
					{
						echo mysql_error();
					}
		}
		
		$youtube_url="http://gdata.youtube.com/feeds/api/videos?q=$movie_name_formatted+trailer&orderby=relevance&setMaxResults=1";
		$xml = simplexml_load_file($youtube_url);
		$video_id = substr($xml->entry->id, -11);
		$query15 = "UPDATE movies SET video_id='$video_id' WHERE movie_id='$current_movie_id'";
		if($query_run15=mysql_query($query15))
					{
					  echo 'Youtube Data Added.<br />';     
						
					}
					else
					{
						echo mysql_error();
					}
	}
	else
	{
		echo 'Problem, its time to call Mike!';
	}
	
	
}
?>
<br />
<br />
<br />
<br />
<br />
<br />
<form action="add_movie.php" method="POST">
Movie Name : <input type="text" name="movie_name" /><br />
Part 1 : <input type="text" name="link1" /><input type="text" name="link1_2" /><input type="text" name="link1_3" /><input type="text" name="link1_4" /><input type="text" name="link1_5" /><input type="text" name="link1_6" /><input type="text" name="link1_7" /><input type="text" name="link1_8" /><br />
Part 2 : <input type="text" name="link2" /><input type="text" name="link2_2" /><input type="text" name="link2_3" /><input type="text" name="link2_4" /><input type="text" name="link2_5" /><input type="text" name="link2_6" /><input type="text" name="link2_7" /><input type="text" name="link2_8" /><br />
Part 3 : <input type="text" name="link3" /><input type="text" name="link3_2" /><input type="text" name="link3_3" /><input type="text" name="link3_4" /><input type="text" name="link3_5" /><input type="text" name="link3_6" /><input type="text" name="link3_7" /><input type="text" name="link3_8" /><br />
Part 4 : <input type="text" name="link4" /><input type="text" name="link4_2" /><input type="text" name="link4_3" /><input type="text" name="link4_4" /><input type="text" name="link4_5" /><input type="text" name="link4_6" /><input type="text" name="link4_7" /><input type="text" name="link4_8" /><br />
Part 5 : <input type="text" name="link5" /><input type="text" name="link5_2" /><input type="text" name="link5_3" /><input type="text" name="link5_4" /><input type="text" name="link5_5" /><input type="text" name="link5_6" /><input type="text" name="link5_7" /><input type="text" name="link5_8" /><br />
Part 6 : <input type="text" name="link6" /><input type="text" name="link6_2" /><input type="text" name="link6_3" /><input type="text" name="link6_4" /><input type="text" name="link6_5" /><input type="text" name="link6_6" /><input type="text" name="link6_7" /><input type="text" name="link6_8" /><br />
Part 7 : <input type="text" name="link7" /><input type="text" name="link7_2" /><input type="text" name="link7_3" /><input type="text" name="link7_4" /><input type="text" name="link7_5" /><input type="text" name="link7_6" /><input type="text" name="link7_7" /><input type="text" name="link7_8" /><br />
Part 8 : <input type="text" name="link8" /><input type="text" name="link8_2" /><input type="text" name="link8_3" /><input type="text" name="link8_4" /><input type="text" name="link8_5" /><input type="text" name="link8_6" /><input type="text" name="link8_7" /><input type="text" name="link8_8" /><br />
Torrent : <input type="text" name="torrent" /><br />
<input type="submit" value="Add to database!">
</form>
<?
}
?>