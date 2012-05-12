<?

require 'login_slider.php';
require 'header.php';
?>
<title>About Us | MediaGet</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/ga.js"></script>
<link type="text/css" href="css/dot-luv/jquery-ui.css" rel="stylesheet" />
<link type="text/css" href="css/tv-show.css" rel="stylesheet" />
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
				<div id="about">
				<h3><a href="#">About Us</a></h3>
				<div>
				<p>Mediaget is aimed at being the no. 1 online portal for finding all tv shows and movies thats out there (You name it; we will have it!). We will provide everything in smaller file sizes (mkv format) without lowering the quality. (Theres HD quality videos for those with high speed net connections and an enormous harddisk).</p><br />
<p>Newly released episodes of popular tv shows shall be released within hours of it being aired in US.</p>
<p>The site will not only have ddls (direct download links) to the content but also links to watch the show online and torrent files for the shows in mkv format.</p><br />
<p>Another unique trait of Mediaget is that you can browse for movies and tv shows by their genre, year of release and popularity/critic ratings. There are options to like a particular show/season/episode or movie, based on which they will be ranked on the site.</p><br />

<p>And you guys want any particular show or more, send in a request and feel free to provide any suggestions that come to your mind. We shall get down to it asap!</p><br />
				</div>
				</div>
</div>
<div id="body_picture">
<img src="http://mediaget.info/images/about.jpg" width="518px">
</div>
<?	
echo '</div>';

		echo '<script>
			
		$(function() {
				$( "#about" ).accordion({
					autoHeight: false
				});
				});
		</script>';

?>
<div id="footer">
<a href="dmca.html">DMCA Takedown</a>
</div>
</div>