<?
require '../includes/dbconnect.inc.php';
require '../includes/functions.inc.php';
if(isset($_POST['id']))
{
	if(!empty($_POST['id']))
	{
		$id = mysql_real_escape_string($_POST['id']);
		$query = "SELECT * FROM movie_links WHERE movie_id='$id'";
		$query_result = mysql_query($query);
		while($link_details = mysql_fetch_assoc($query_result))
		{
			$part = $link_details['link_num'];
			$link1 = $link_details['link'];
			$link2 = $link_details['link2'];
			$link3 = $link_details['link3'];
			$link4 = $link_details['link4'];
			$link5 = $link_details['link5'];
			$link6 = $link_details['link6'];
			$link7 = $link_details['link7'];
			$link8 = $link_details['link8'];
			echo '</br><b>Part '.$part.'</b></br>';
			if(!empty($link1))
			{
			$link1_filehost = check_filehost_name($link1);
			echo '<a href="'.$link1.'" target="_blank" ><img src="http://mediaget.info/images/'.$link1_filehost.'.png" width="100px" height="100px" /></a>';
			}
			if(!empty($link2))
			{
			$link2_filehost = check_filehost_name($link2);
			echo '<a href="'.$link2.'" target="_blank" ><img src="http://mediaget.info/images/'.$link2_filehost.'.png" width="100px" height="100px" /></a>';
			}
			if(!empty($link3))
			{
			$link3_filehost = check_filehost_name($link3);
			echo '<a href="'.$link3.'" target="_blank" ><img src="http://mediaget.info/images/'.$link3_filehost.'.png" width="100px" height="100px" /></a>';
			}
			if(!empty($link4))
			{
			$link4_filehost = check_filehost_name($link4);
			echo '<a href="'.$link4.'" target="_blank" ><img src="http://mediaget.info/images/'.$link4_filehost.'.png" width="100px" height="100px" /></a>';
			}
			if(!empty($link5))
			{
			$link5_filehost = check_filehost_name($link5);
			echo '<a href="'.$link5.'" target="_blank" ><img src="http://mediaget.info/images/'.$link5_filehost.'.png" width="100px" height="100px" /></a>';
			}
			if(!empty($link6))
			{
			$link6_filehost = check_filehost_name($link6);
			echo '<a href="'.$link6.'" target="_blank" ><img src="http://mediaget.info/images/'.$link6_filehost.'.png" width="100px" height="100px" /></a>';
			}
			if(!empty($link7))
			{
			$link7_filehost = check_filehost_name($link7);
			echo '<a href="'.$link7.'" target="_blank" ><img src="http://mediaget.info/images/'.$link7_filehost.'.png" width="100px" height="100px" /></a>';
			}
			if(!empty($link8))
			{
			$link8_filehost = check_filehost_name($link8);
			echo '<a href="'.$link8.'" target="_blank" ><img src="http://mediaget.info/images/'.$link8_filehost.'.png" width="100px" height="100px" /></a>';
			}
		}
	}
}