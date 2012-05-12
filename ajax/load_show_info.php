<?
require '../includes/dbconnect.inc.php';
    if(isset($_GET['id']))
	{
		$id = mysql_real_escape_string($_GET['id']);
		
		$query = "SELECT * FROM tv_shows_list WHERE tv_show_id='$id'";
		$result_query = mysql_query($query);
			while($show_info = mysql_fetch_assoc($result_query))
			{
				echo '
				<table width="600px">
				<tr>
					<th><h2>'.$show_info['tv_show_name'].'</h2></th>
				</tr>
				<tr>
					<td><img src="../images/featured_image/'.$id.'.jpg"></td>
				</tr>
				<tr>
					<td>'.$show_info['desc'].'</td>
				</tr>
				</table>';
				
			}
	}
?>
		