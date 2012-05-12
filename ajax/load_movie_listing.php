<?
require '../includes/dbconnect.inc.php';
    if(isset($_POST['keyword']))
	{
    $keyword = addslashes($_POST['keyword']);
	$all = 'all';
	$year = 'year:';
	$genre = 'genre:';
	$actor = 'actor:';
	if(strtolower($keyword) == strtolower($all))
	{
		$query1 = "SELECT * FROM movies ORDER BY movie_name ASC";
		$result_query1 = mysql_query($query1);
		while($movie_name = mysql_fetch_assoc($result_query1))
                        {
                            echo '<span id="'.$movie_name['movie_id'].'"><u>'.$movie_name['movie_name'].'</u></span>';
                            echo '<br />';
                        }
	}
	elseif(substr(strtolower($keyword), 0, 5) == $year)
	{
		$year_queried = substr($keyword, 5);
		$query2 = "SELECT * FROM movies WHERE year LIKE '%$year_queried%' ORDER BY movie_name ASC";
		echo '<i>Displaying Movies with '.$year_queried.' in their year of release</i><br />';
		$result_query2 = mysql_query($query2);
		while($movie_name = mysql_fetch_assoc($result_query2))
                        {
                            echo '<span id="'.$movie_name['movie_id'].'"><u>'.$movie_name['movie_name'].'</u></span>';
                            echo '<br />';
						}
	}
	elseif(substr(strtolower($keyword), 0, 6) == $genre)
	{
		$genre_queried = substr($keyword, 6);
		$query3 = "SELECT * FROM movies WHERE LOWER(genre) LIKE '%$genre_queried%' ORDER BY movie_name ASC";
		echo '<i>Displaying Movies with '.$genre_queried.' genre</i><br />';
		$result_query3 = mysql_query($query3);
		while($movie_name = mysql_fetch_assoc($result_query3))
                        {
                            echo '<span id="'.$movie_name['movie_id'].'"><u>'.$movie_name['movie_name'].'</u></span>';
                            echo '<br />';
						}
	}
	elseif(substr(strtolower($keyword), 0, 6) == $actor)
	{
		$actor_queried = substr($keyword, 6);
		$query4 = "SELECT * FROM movies WHERE LOWER(actors) LIKE '%$actor_queried%' ORDER BY movie_name ASC";
		echo '<i>Displaying Movies starring '.$actor_queried.' </i><br />';
		$result_query4 = mysql_query($query4);
		while($movie_name = mysql_fetch_assoc($result_query4))
                        {
                            echo '<span id="'.$movie_name['movie_id'].'"><u>'.$movie_name['movie_name'].'</u></span>';
                            echo '<br />';
						}
	}
	else
	{
    $query = "SELECT * FROM movies WHERE movie_name LIKE '%$keyword%' ORDER BY movie_name ASC";
    $result_query = mysql_query($query);
    while($movie_name = mysql_fetch_assoc($result_query))
                        {
                            echo '<span id="'.$movie_name['movie_id'].'"><u>'.$movie_name['movie_name'].'</u></span>';
                            echo '<br />';
                        }
	}
	}
	echo '<script>
	$(document).ready(function(){

	$("span").click(function() {
		var id = $(this).attr("id");
		var blank_data = "";
		$.post(\'../ajax/load_movie_details.php\', {\'id\': id}, function(data) {
		$("#episodes").css("display", "none");
		$("#movie_data").css("display", "inherit");
		$("#movie_data").html(data);

	});
		
	});

});

</script>';

?>