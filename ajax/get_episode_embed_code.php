<?
require '../includes/dbconnect.inc.php';


	$id = mysql_real_escape_string($_POST['epi_id']);

		$query = "SELECT * FROM episodes WHERE episode_id='$id'";
	$result_query = mysql_query($query);
		while($embed_data = mysql_fetch_assoc($result_query))
                      {
				echo $embed_data['embed_code'];
					
          }
          
		
?>