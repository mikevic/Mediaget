<?

require 'login_slider.php';
require 'header.php';

?>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/ga.js"></script>
<link type="text/css" href="css/dot-luv/jquery-ui.css" rel="stylesheet" />
<link type="text/css" href="css/browse.css" rel="stylesheet" />
<title>Browse</title>
<div id="container">
<div id="shadow">
<div id="leftnav">
<?
require 'leftnav.php';
?>
</div>
<div id="browse">
<?
if(isset($_GET['page']))
{
	if($_GET['page'] > 0)
	{
	$page = mysql_real_escape_string($_GET['page'])-1;
	}
	$actual_page = mysql_real_escape_string($_GET['page']);
}
else
{
	$page = 0;
	$actual_page = 1;
}
$offset = $page*20;
$query = "SELECT * from tv_shows_list ORDER BY tv_show_name ASC LIMIT 20 OFFSET $offset";
$result_query = mysql_query($query);
$i = 0;
$next = $actual_page + 1;
$back = $actual_page - 1;

	echo '<div align="left" style="width:500px; float:left;"><a href="http://mediaget.info/browse.php?page='.$back.'" style="color:white;"><img src="http://mediaget.info/images/back.png"></img></a></div>';

	echo '<div align="right" style="width:500px; float:right;"><a href="http://mediaget.info/browse.php?page='.$next.'" style="color:white;"><img src="http://mediaget.info/images/forward.png"></img></a></div><br />';

while($tv_shows = mysql_fetch_assoc($result_query))
{
	echo '<a href="http://mediaget.info/tv-show.php?id='.$tv_shows['tv_show_id'].'"><img src="http://mediaget.info/images/tv_boxes/'.$tv_shows['tv_show_id'].'.jpg" alt="'.$tv_shows['tv_show_name'].'"></img></a>';
	$i = $i + 1 ;
	if($i == 5)
	{
	echo '<br />';
	$i = 0;
	}
}

	echo '<div align="left" style="width:500px; float:left;"><a href="http://mediaget.info/browse.php?page='.$back.'" style="color:white;"><img src="http://mediaget.info/images/back.png"></img></a></div>';

	echo '<div align="right" style="width:500px; float:right;"><a href="http://mediaget.info/browse.php?page='.$next.'" style="color:white;"><img src="http://mediaget.info/images/forward.png"></img></a></div><br />';

?>
</div>
<div id="footer">
<a href="dmca.html">DMCA Takedown</a>
</div>
</div>
</div>