<?
require '../includes/dbconnect.inc.php';
    if(isset($_POST['keyword']))
{
    $keyword = $_POST['keyword'];
	$all = 'all';
	if(strtolower($keyword) == strtolower($all))
	{
		$query1 = "SELECT * FROM tv_shows_list ORDER by tv_show_name ASC";
		$result_query1 = mysql_query($query1);
		while($tv_show_name = mysql_fetch_assoc($result_query1))
                        {
                            echo '<span id="'.$tv_show_name['tv_show_id'].'"><u>'.$tv_show_name['tv_show_name'].'</u></span>';
                            echo '<br />';
                        }
	}
	else
	{
		$query = "SELECT * FROM tv_shows_list WHERE tv_show_name LIKE '%$keyword%' ORDER by tv_show_name ASC";
		$result_query = mysql_query($query);
		while($tv_show_name = mysql_fetch_assoc($result_query))
							{
								echo '<span id="'.$tv_show_name['tv_show_id'].'"><u>'.$tv_show_name['tv_show_name'].'</u></span>';
								echo '<br />';
							}
	}
	echo '<script>
	$(document).ready(function(){

	$("span").click(function() {
		var id = $(this).attr("id");
		var blank_data = "";
		$.post(\'../ajax/load_episodes.php\', {\'id\': id}, function(data) {
		$("#movie_data").css("display", "none");
		$("#episodes").css("display", "inherit");
		$("#episodes").html(data);

	});
		
	});

});

</script>';
}
?>