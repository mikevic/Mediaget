<?
require '../includes/dbconnect.inc.php';
require '../includes/functions.inc.php';
if(isset($_POST['id']))
{
	if(!empty($_POST['id']))
	{
		$flag=0;
		$id = mysql_real_escape_string($_POST['id']);
		$query = "SELECT * FROM episodes WHERE episode_id='$id'";
		$query_result = mysql_query($query);
		while($link_details = mysql_fetch_assoc($query_result))
		{
			echo '<b>Download Links</b><br />';
			$link1 = $link_details['link1'];
			$link2 = $link_details['link2'];
			$link3 = $link_details['link3'];
			$link4 = $link_details['link4'];
			$link5 = $link_details['link5'];
			$link6 = $link_details['link6'];
			$link7 = $link_details['link7'];
			$link8 = $link_details['link8'];
			$embed_code = $link_details['embed_code'];
			if(!empty($link1))
			{
			$link1_filehost = check_filehost_name($link1);
			echo '<a href="'.$link1.'" target="_blank" ><img src="http://mediaget.info/images/'.$link1_filehost.'.png" width="100px" height="100px" /></a>';
			if($flag!=0 && $flag%3==0)
			{
				echo '<br />';
			}
			$flag = $flag+1;
			}
			if(!empty($link2))
			{
			$link2_filehost = check_filehost_name($link2);
			echo '<a href="'.$link2.'" target="_blank" ><img src="http://mediaget.info/images/'.$link2_filehost.'.png" width="100px" height="100px" /></a>';
			if($flag!=0 && $flag%3==0)
			{
				echo '<br />';
			}
			$flag = $flag+1;
			}
			if(!empty($link3))
			{
			$link3_filehost = check_filehost_name($link3);
			echo '<a href="'.$link3.'" target="_blank" ><img src="http://mediaget.info/images/'.$link3_filehost.'.png" width="100px" height="100px" /></a>';
			if($flag!=0 && $flag%3==0)
			{
				echo '<br />';
			}
			$flag = $flag+1;
			}
			if(!empty($link4))
			{
			$link4_filehost = check_filehost_name($link4);
			echo '<a href="'.$link4.'" target="_blank" ><img src="http://mediaget.info/images/'.$link4_filehost.'.png" width="100px" height="100px" /></a>';
			if($flag!=0 && $flag%3==0)
			{
				echo '<br />';
			}
			$flag = $flag+1;
			}
			if(!empty($link5))
			{
			$link5_filehost = check_filehost_name($link5);
			echo '<a href="'.$link5.'" target="_blank" ><img src="http://mediaget.info/images/'.$link5_filehost.'.png" width="100px" height="100px" /></a>';
			if($flag!=0 && $flag%3==0)
			{
				echo '<br />';
			}
			$flag = $flag+1;
			}
			if(!empty($link6))
			{
			$link6_filehost = check_filehost_name($link6);
			echo '<a href="'.$link6.'" target="_blank" ><img src="http://mediaget.info/images/'.$link6_filehost.'.png" width="100px" height="100px" /></a>';
			if($flag!=0 && $flag%3==0)
			{
				echo '<br />';
			}
			$flag = $flag+1;
			}
			if(!empty($link7))
			{
			$link7_filehost = check_filehost_name($link7);
			echo '<a href="'.$link7.'" target="_blank" ><img src="http://mediaget.info/images/'.$link7_filehost.'.png" width="100px" height="100px" /></a>';
			if($flag!=0 && $flag%3==0)
			{
				echo '<br />';
			}
			$flag = $flag+1;
			}
			if(!empty($link8))
			{
			$link8_filehost = check_filehost_name($link8);
			echo '<a href="'.$link8.'" target="_blank" ><img src="http://mediaget.info/images/'.$link8_filehost.'.png" width="100px" height="100px" /></a>';
			if($flag!=0 && $flag%3==0)
			{
				echo '<br />';
			}
			$flag = $flag+1;
			}
			if(!empty($embed_code))
			{
			echo '<a href="#" onclick="generate_modal_window('.$id.')"><img src="http://mediaget.info/images/watch_online.png" width="100px height="100px" /></a>';
			}
		}
		echo '<br />';
		echo '<script type="text/javascript"><!--
google_ad_client = "ca-pub-6568638854251278";
/* Download Box */
google_ad_slot = "4503767250";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';
	}
}
?>